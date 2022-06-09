<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Post extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable = [
        'user_id', 'title','slug','body','published_at'
    ];

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
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function categoryIds(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->categories()->pluck('categories.id')->toArray(),
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
