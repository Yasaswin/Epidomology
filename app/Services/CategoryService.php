<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CategoryService {


    public function store($data)
    {
        DB::beginTransaction();
        try 
        {          
            $category = new Category;           
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->save();
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $category;
    }

    public function shouldUpdate(Category $category,$data)
    {    
        if (
            $category->name != $data['name'] ||
            $category->description != $data['description']
                ) {          
                return true;
        }
        else {
                return false;
            }
    }

    public function update(Category $category,$data)
    {
        $this->checkConcurrency($category->updated_at, $data['updated_at']);
        DB::beginTransaction();
        try 
        {
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->save();     
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $category;
    }
}