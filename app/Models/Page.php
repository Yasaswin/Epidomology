<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class Page extends Model
{
    use HasFactory;

    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_en','title_si','title_ta', 'body_en','body_si','body_ta','slug','category_id','layout_id','notice_id'
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
                'source' => 'title_en'
            ]
        ];
    }

    protected function title(): Attribute
    {
        $attribute = 'title_'.(App::currentLocale());
                return Attribute::make(
            get: fn ($value) => $this->$attribute ?? $this->title_en,
        ); 
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

    public function subMenu(){
        return $this->belongsToMany(Menu::class,'page_menu');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function notice(){
        return $this->belongsTo(Notice::class);
    }

    public function pages(){
        return $this->belongsToMany(Tile::class);
    }

    public function layout(){
        return $this->belongsTo(Layout::class);
    }


    public static function products($posts){
        $list = '
        <div id="page-meta" class="group">
          <p class="woocommerce-result-count">Showing 1-9 of 23 results </p>

          <aside class="widget-search">
              <form method="get" class="search-form" action="#">
                  <label>
                      <span class="screen-reader-text">Search for:</span>
                      <input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:">
                  </label>
                  <input type="submit" class="search-submit" value="GO">
              </form>
          </aside>
        </div>';
            $list = $list.'<ul class="products">';

            foreach($posts as $post){

                $list = $list.'
                    <li class="product">
                        <div class="picture" >
                            <div class="ribbon ribbon-blue">
                                <div class="banner">
                                    <div class="text">New</div>
                                </div>
                            </div>
                            <img src="img/2.jpg" data-at2x="img/2.jpg" alt="">
                            <span class="hover-effect"></span>
                            <div class="link-cont">
                                <a href="2.jpg" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                            </div>
                            
                        </div>
                        <div class="product-name">
                            <a href="">'.$post->title.'</a>
                        </div>
                        <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                    </li>
                ';
            }
            $list = $list.'</ul>';

        $list = $list.'
        <div class="page-pagination clear-fix">
            <a href="#"><i class="fa fa-angle-double-left"></i></a><!--
            --><a href="#">1</a><!-- 
            --><a href="#">2</a><!-- 
            --><a href="#" class="active">3</a><!-- 
            --><a href="#"><i class="fa fa-angle-double-right"></i></a>
        </div>';

        return $list;

    }

    

}
