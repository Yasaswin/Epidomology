<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Page;


class MenuService {

    private $default_status = 'SHOW';

    public function store($request)
    {
        $data=$request->all();

        DB::beginTransaction();
        try 
        {
            $menu = new Menu;          
            $menu->name_en = $data['name_en'] ?? null;
            $menu->name_si = $data['name_si'] ?? null;
            $menu->name_ta = $data['name_ta'] ?? null;
            $menu->category_id = is_numeric($data['category_id']?? null)?$data['category_id']:null;
            $menu->parent_id = is_numeric($data['parent_id']?? null)?$data['parent_id']:null;
            $menu->page_id = is_numeric($data['page_id']?? null)?$data['page_id']:null;
            $menu->has_sub_menus = ($data['has_sub_menus']?? '0') =='1'?true:false;
            $menu->order = $data['order'] ?? null;
            $menu->status = $data['status'] ?? $this->default_status;
            $menu->save();

            if($menu->id&&$menu->has_sub_menus){
                $sub_menu = $data['menu_id'] == '*' ? $menu->id : ($data['menu_id'] ?? null);
                $menu->page->subMenu->attach($sub_menu);
            }

        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $menu;
    }

    public function shouldUpdate( Menu $menu,$data )
    {
        if (
            $menu->name_en != $data['name_en'] ||
            $menu->name_si != $data['name_si'] ||
            $menu->name_ta != $data['name_ta'] ||
            $menu->category_id != $data['category_id'] ||
            $menu->parent_id != $data['parent_id'] ||
            $menu->page_id != $data['page_id'] ||
            $menu->order != $data['order'] ||
            $menu->has_sub_menus != $data['has_sub_menus'] ||
            $menu->status != ($data['status'] ?? $this->default_status) 

                ) {            
                return true;
        }
        else {
                return false;
            }
    }

    public function update( Menu $menu,$request)
    {
        // $this->checkConcurrency($menu->updated_at, $data['updated_at']);
        $data = $request->all();

        DB::beginTransaction();
        try 
        {
            $menu->name_en = $data['name_en'] ?? null;
            $menu->name_si = $data['name_si'] ?? null;
            $menu->name_ta = $data['name_ta'] ?? null;
            $menu->category_id = is_numeric($data['category_id']?? null)?$data['category_id']:null;
            $menu->parent_id = is_numeric($data['parent_id']?? null)?$data['parent_id']:null;
            $menu->page_id = is_numeric($data['page_id']?? null)?$data['page_id']:null;
            $menu->has_sub_menus = ($data['has_sub_menus']?? '0') =='1'?true:false;
            $menu->order = $data['order'] ?? null;
            $menu->status = $data['status'] ?? $this->default_status;
            $menu->save();  

            if($menu->page){
                if($menu->page->subMenu){
                        $menu->page->subMenu()->detach();
                        
                    if($menu->has_sub_menus){
                        $sub_menu = $data['menu_id'] == '*' ? $menu->id : ($data['menu_id'] ?? null);
                        $menu->page->subMenu()->attach($sub_menu);
                    }
                }

            }
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $menu;
    }
}