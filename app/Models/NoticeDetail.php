<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class NoticeDetail extends Model
{
    use HasFactory;



    protected function label(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->label_en,
        );
        
    }

    public function scopeShow($query)
    {  
        return $query->where('status', "SHOW");
    }


}
