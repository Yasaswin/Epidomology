<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notice;
use App\Models\NoticeDetail;


class NoticeService {

    protected function storeImage($image){

        $name=$image->getClientOriginalName();
        $destinationPath = 'storage/notice/images';
        $image->move($destinationPath, $name);

        return $name;

    }


    private $default_status = 'ACTIVE';
    public function store($request)
    {
        $data=$request->all();
        // dd($data);

        DB::beginTransaction();
        try 
        {
            $notice = new Notice;          
            $notice->name = $data['name'] ?? null;
            $notice->image = $request->hasFile('image')? $this->storeImage($request->file('image')) : null;
            $notice->layout_id = $data['layout_id'] ?? null;
            $notice->status = $data['status'] ?? $this->default_status;
            $notice->save();

            if($notice->id && ($data['details']??null)){
                foreach($data['details'] as $key => $value){
                    $detail = new NoticeDetail;    
                    $detail->notice_id = $notice->id;      
                    $detail->label_en = $value['label_en'] ?? null;
                    $detail->label_si = $value['label_si'] ?? null;
                    $detail->label_ta = $value['label_ta'] ?? null;
                    $detail->value = $value['value'] ?? null;
                    $detail->label_id = $key ?? null;  
                    $detail->status = $detail->label_en ? 'SHOW' : 'HIDE';
                    $detail->save();
                }
            }                
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $notice;
    }

    public function shouldUpdate( Notice $notice,$data )
    {
        if (
            $notice->name != $data['name'] ||
            $notice->layout_id != $data['layout_id'] ||
            $notice->image != $data['image'] ||
            $notice->status != ($data['status'] ?? $this->default_status)

                ) {            
                return true;
        }
        else {
                return false;
            }
    }

    public function update( Notice $notice,$request)
    {
        // $this->checkConcurrency($notice->updated_at, $data['updated_at']);
        $data = $request->all();
        // dd($data['details']['data1']['value']);

        DB::beginTransaction();
        try 
        {
            $notice->name = $data['name'] ?? null;
            $notice->layout_id = $data['layout_id'] ?? null;
            if($request->hasFile('image'))
                {
                    $notice->image =  $this->storeImage($request->file('image'));
                }
            $notice->status = $data['status'] ?? $this->default_status;
            $notice->save();  

            foreach($data['details'] as $key => $value){
                if($detail = $notice->noticeDetails()->where('label_id',$key)->first()){
                    //
                        }else{
                    $detail = new NoticeDetail;
                    $detail->notice_id = $notice->id; 
                    $detail->label_id = $key ?? null;  

                }
                $detail->label_en = $value['label_en'] ?? null;
                $detail->label_si = $value['label_si'] ?? null;
                $detail->label_ta = $value['label_ta'] ?? null;
                $detail->value = $value['value'] ?? null;
                $detail->status = $detail->label_en ? 'SHOW' : 'HIDE';
                $detail->save();
            }               
            
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $notice;
    }
}