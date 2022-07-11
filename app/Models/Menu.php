<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Http\Request;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en','name_si','name_ta','category_id','page_id','parent_id','status','order'
    ];

    public function parent(){
        return $this->belongsTo(Menu::class,'parent_id');
    }

    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function children(){
        return $this->hasMany(Menu::class,'parent_id');
    }

    public function subMenuPage(){
        return $this->belongsToMany(Page::class,'page_menu');
    }

    public function childrenRecusive(){
        return $this->children()->with('children');
    }

    public function isLastChild(){
        return !$this->children()->exists();
    }

    public function isParent(){
        return is_null($this->parent_id) ;
    }

    public static function getParents(){
        return  self::where('parent_id',null)->where('status','SHOW')->orderBy('order')->get();
    }

    public function scopeShowMenus($query)
    {  
        return $query->where('status', '<=', 'Show');
    }
    public function scopeOrderMenus($query)
    {  
        return $query->orderBy('order');
    }

    public function arrangeChildrenMenus($active_id=null,$open_menus=[])
    {
        $list='';
        if($this->isParent()){
            if($this->children()->showMenus()->exists() ){
                $list = '<ul> ';
                foreach($this->children()->showMenus()->OrderMenus()->get() as $submenu){
                    $open = in_array($this->id,$open_menus)?' menu-open':'';
                    $route = $submenu->route ? route($submenu->route) : ($submenu->page ? route('viewpage',[$submenu->page->slug]) : '') ;
                    $active = $submenu->id == $active_id ? ' active' : '';
                    $list = $list.'<li> <a href="'.$route.'" class="'.$active.'">'.$submenu->name.'</a></li>';
                }
                $list = $list.'</ul>';
            }
        }
        return $list;
    }

    private $active_submenu = ' active';

    public function arrangeSubMenus()
    {

        $list='';

        if($this->children()->showMenus()->exists() ){
                                    
            foreach($this->children()->showMenus()->OrderMenus()->get() as $submenu){
                $list = $list.'<div class="content-title "><h4>'.$submenu->name_en.'</h4></div> ';

                $list = $list.'<div class="content">';
                if( $submenu->isLastChild()){

                    if($posts=$submenu->category->posts ?? false){
                        $list = $list.Page::products($posts);
                    }
                    // $this->active='';   
                }
                elseif ($list2 = $submenu->arrangeSubMenus()){
                    $list = $list.$list2;
                    // dd($list2);

                }
                $list = $list.'</div>';
            }

        }

        return $list;
    }

    // protected function subMenus(): Attribute
    // {
    //     $list = '';
    //     if($this->isParent()){
    //         $list = $this->arrangeChildrenMenus($this);
    //     }
    //     return Attribute::make(
    //         get: fn ($value) => $list,
    //     );
    // }



    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->name_en,
        );
        
    }

    protected function parentFamily(): Attribute
    {
        $family = collect([]);
        $parent = $this->parent;
        while(!is_null($parent)){
            $family->push($parent);
            $parent = $parent->parent;
        }
        return Attribute::make(
            get: fn ($value) => $family,
        );
    }


    public static function firstActiveChild(){
        foreach(self::showMenus()->OrderMenus()->get() as $menu){
            if( request()->is($menu->active)){
                return $menu;
            }
        }
        return null;
    }
}
