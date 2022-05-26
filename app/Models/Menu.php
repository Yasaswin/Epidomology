<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Menu extends Model
{
    use HasFactory;

    public function parent(){
        return $this->belongsTo(Menu::class,'parent_id');
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

    public function arrangeChildrenMenus($menu)
    {
        $list='';
        if($menu->children()->showMenus()->exists() ){
            $list = '<ul class="nav-item nav-treeview"> <li class="nav-item"> ';
            foreach($menu->children()->showMenus()->OrderMenus()->get() as $submenu){
                $list = $list.'<a href="" class="nav-link"><i class="nav-icon far fa-id-card"></i><p>'.$submenu->name.'</p>';
                if(!$submenu->isLastChild()){
                    $list = $list.'<i class="fas fa-angle-left right"></i>';
                }
                $list = $list.'</a>';
                if($submenu->children()->showMenus()->exists() ){
                    $list = $list.'<ul class="nav-item nav-treeview"> ';
                    foreach( $submenu->children()->showMenus()->OrderMenus()->get() as $child){
                        $list = $list.'<li class="nav-item"> <a href="" class="nav-link"><i class="nav-icon far fa-id-card"></i><p>'.$child->name.'</p>';
                        if(!$child->isLastChild()){
                            $list = $list.'<i class="fas fa-angle-left right"></i>';
                        }
                        $list = $list.'</a>';
                        if($list2 = $this->arrangeChildrenMenus($child)){
                            $list = $list.$list2;
                        }
                        $list = $list.'</li>';
                    }
                }
                else{
                    $list = $list.'</li></ul>';
                }
            }
            $list = $list.'</li></ul>';
        }
        return $list;
    }

    protected function subMenus(): Attribute
    {
        $list = '';
        if($this->isParent()){
            $list = $this->arrangeChildrenMenus($this);
        }
        return Attribute::make(
            get: fn ($value) => $list,
        );
    }

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
}
