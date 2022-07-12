<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable = [
        'user_id', 'title','slug','body','published_at'
    ];

    private static $event_names = ['event','events'];

        /**
     * Return the sluggable configuration array for this model.
     * 
     * @return @array
     */

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * 
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function categoryIds(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->categories()->pluck('categories.id')->toArray(),
        );
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->title_en,
        );
        
    }

    public static function getComingEvents(){

        $names = self::$event_names;

        return self::whereHas('categories', function ($q) use ($names) {
            $q->whereIn('categories.name',$names);
        })->where('posts.end','>',Comm::getNow())->orderBy('posts.start')->paginate(10);
    
    }
    
    public static function getPastEvents(){

        $names = self::$event_names;

        return self::whereHas('categories', function ($q) use ($names) {
            $q->whereIn('categories.name',$names);
        })->where('posts.end','<=',Comm::getNow())->orderBy('posts.end','DESC')->paginate(10);
    
    }

    protected function eventDay(): Attribute
    {
        $day = $this->start ? Carbon::parse($this->start)->format('d') : null;
        return Attribute::make(
            get: fn ($value) => $day,
        );
        
    }

    protected function eventMonth(): Attribute
    {
        $month = $this->start ? Carbon::parse($this->start)->settings(['formatFunction' => 'translatedFormat'])->format('M') : null;
        return Attribute::make(
            get: fn ($value) => $month,
        );
        
    }

    protected function eventStart(): Attribute
    {
        $day = $this->start ? Carbon::parse($this->start)->settings(['formatFunction' => 'isoFormat'])->format('LT') : null;
        return Attribute::make(
            get: fn ($value) => $day,
        );
        
    }

    protected function eventEnd(): Attribute
    {
        $end = $this->end ? Carbon::parse($this->end)->settings(['formatFunction' => 'isoFormat'])->format('LT') : null;
        return Attribute::make(
            get: fn ($value) => $end,
        );
        
    }

    /**
     * Get the categories that belongs to post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    
    /**
     * Get the user that created the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the images that belongs to post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('App\Models\PostImage', 'post_id',  'id');
    }

    /**
     * Get the pdfs that belongs to post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pdfs()
    {
        return $this->hasMany('App\Models\PostPdf', 'post_id',  'id');
    }

    /**
     * Get the videos that belongs to post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()
    {
        return $this->hasMany('App\Models\PostVideo', 'post_id',  'id');
    }
    

}
