<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tile;

class TileService {
    private $default_staus = '1';

    public function store( $data )
    {
        DB::beginTransaction();
        try 
        {
            $tile = new Tile;          
            $tile->name_en = $data['name_en'] ?? null;
            $tile->name_si = $data['name_si'] ?? null;
            $tile->name_ta = $data['name_ta'] ?? null;
            $tile->code = $data['code'] ?? null;
            $tile->description = $data['description'] ?? null;
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
            $tile->code != $data['code'] ||
            $tile->description != $data['description'] ||
            $tile->status != ($data['status'] ?? $this->default_status)

                ) {            
                return true;
        }
        else {
                return false;
            }
    }

    public function update( Tile $tile,$data )
    {
        // $this->checkConcurrency($tile->updated_at, $data['updated_at']);
        DB::beginTransaction();
        try 
        {
            $tile->name_en = $data['name_en'] ?? null;
            $tile->name_si = $data['name_si'] ?? null;
            $tile->name_ta = $data['name_ta'] ?? null;
            $tile->code = $data['code'] ?? null;
            $tile->description = $data['description'] ?? null;
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