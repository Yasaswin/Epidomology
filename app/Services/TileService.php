<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tile;

class TileService {

    protected function storeImage($image){

        $name=$image->getClientOriginalName();
        $destinationPath = 'storage/tile/images';
        $image->move($destinationPath, $name);

        return $name;

    }


    private $default_status = 'ACTIVE';
    public function store($request)
    {
        $data=$request->all();

        DB::beginTransaction();
        try 
        {
            $tile = new Tile;          
            $tile->name_en = $data['name_en'] ?? null;
            $tile->name_si = $data['name_si'] ?? null;
            $tile->name_ta = $data['name_ta'] ?? null;
            $tile->order = $data['order'] ?? null;
            $tile->description_en = $data['description_en'] ?? null;
            $tile->description_si = $data['description_si'] ?? null;
            $tile->description_ta = $data['description_ta'] ?? null;
            $tile->page_id = $data['page_id'] ?? null;
            $tile->background_image = $request->hasFile('background_image')? $this->storeImage($request->file('background_image')) : null;
            $tile->status = $data['status'] ?? $this->default_status;
            $tile->save();

        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $tile;
    }

    public function shouldUpdate( Tile $tile,$data )
    {
        if (
            $tile->name_en != $data['name_en'] ||
            $tile->name_si != $data['name_si'] ||
            $tile->name_ta != $data['name_ta'] ||
            $tile->order != $data['order'] ||
            $tile->description_en != $data['description_en'] ||
            $tile->description_si != $data['description_si'] ||
            $tile->description_ta != $data['description_ta'] ||
            $tile->page_id != $data['page_id'] ||
            $tile->background_image != $data['background_image'] ||
            $tile->status != ($data['status'] ?? $this->default_status)

                ) {            
                return true;
        }
        else {
                return false;
            }
    }

    public function update( Tile $tile,$request)
    {
        // $this->checkConcurrency($tile->updated_at, $data['updated_at']);
        $data = $request->all();

        DB::beginTransaction();
        try 
        {
            $tile->name_en = $data['name_en'] ?? null;
            $tile->name_si = $data['name_si'] ?? null;
            $tile->name_ta = $data['name_ta'] ?? null;
            $tile->order = $data['order'] ?? null;
            $tile->description_en = $data['description_en'] ?? null;
            $tile->description_si = $data['description_si'] ?? null;
            $tile->description_ta = $data['description_ta'] ?? null;
            $tile->page_id = $data['page_id'] ?? null;
            if($request->hasFile('background_image'))
                {
                    $tile->background_image =  $this->storeImage($request->file('background_image'));
                }
            $tile->status = $data['status'] ?? $this->default_status;
            $tile->save();     
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $tile;
    }
}