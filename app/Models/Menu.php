<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Http\Request;

class Menu extends Model
{
    use HasFactory;

    public function parent(){
        return $this->belongsTo(Menu::class,'parent_id');
    }

    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }

    public function children(){
        return $this->hasMany(Menu::class,'parent_id');
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
