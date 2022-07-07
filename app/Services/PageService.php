<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;

class PageService {

    public function store($request)
    {
        $data=$request->all();

        DB::beginTransaction();
        try 
        {
            $page = new Page;          
            $page->title_en = $data['title_en'] ?? null;
            $page->title_si = $data['title_si'] ?? null;
            $page->title_ta = $data['title_ta'] ?? null;
            $page->body_en = $data['body_en'] ?? null;
            $page->body_si = $data['body_si'] ?? null;
            $page->body_ta = $data['body_ta'] ?? null;
            $page->category_id = is_numeric($data['category_id']?? null)?$data['category_id']:null;
            $page->layout_id = is_numeric($data['layout_id']?? null)?$data['layout_id']:null;
            $page->notice_id = is_numeric($data['notice_id']?? null)?$data['notice_id']:null;
            $page->save();

        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $page;
    }

    public function shouldUpdate( Page $page,$data )
    {
        if (
            $page->title_en != $data['title_en'] ||
            $page->title_si != $data['title_si'] ||
            $page->title_ta != $data['title_ta'] ||
            $page->body_en != $data['body_en'] ||
            $page->body_si != $data['body_si'] ||
            $page->body_ta != $data['body_ta'] ||
            $page->category_id != $data['category_id'] ||
            $page->layout_id != $data['layout_id'] ||
            $page->notice_id != $data['notice_id'] 

                ) {            
                return true;
        }
        else {
                return false;
            }
    }

    public function update( Page $page,$request)
    {
        // $this->checkConcurrency($page->updated_at, $data['updated_at']);
        $data = $request->all();

        DB::beginTransaction();
        try 
        {
            $page->title_en = $data['title_en'] ?? null;
            $page->title_si = $data['title_si'] ?? null;
            $page->title_ta = $data['title_ta'] ?? null;
            $page->body_en = $data['body_en'] ?? null;
            $page->body_si = $data['body_si'] ?? null;
            $page->body_ta = $data['body_ta'] ?? null;
            $page->category_id = is_numeric($data['category_id']?? null)?$data['category_id']:null;
            $page->layout_id = is_numeric($data['layout_id']?? null)?$data['layout_id']:null;
            $page->notice_id = is_numeric($data['notice_id']?? null)?$data['notice_id']:null;
            $page->save();     
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $page;
    }
}