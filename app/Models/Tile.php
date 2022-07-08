<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Tile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en','name_si','name_ta','description_en','description_si','description_ta','background_image','page_id','status','order'
    ];

    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }

    public static function getTiles(){
        return self::active()->get();
    }

    public function scopeActive($query){
        return $query->where('tiles.status',"ACTIVE");
    }

    public static function hasTiles(){
        return self::active()->exists();
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->name_en,
        );
        
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->description_en,
        );
        
    }
}

