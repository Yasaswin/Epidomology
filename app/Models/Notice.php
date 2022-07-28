<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Notice extends Model
{
    use HasFactory;

    public function getData(){
        $label=[];
        $value=[];

        foreach($this->noticeDetails()->show()->get() as $detail){
            $label[$detail->label_id]=$detail->label;
            $value[$detail->label_id]=$detail->value;
        }
        return ['labels'=>$label,'values'=>$value];
    }

    public function noticeDetails(){
        return $this->hasMany(NoticeDetail::class);
    }

    protected function details(): Attribute
    {
        $details = [];
        foreach($this->noticeDetails as $detail){
            if($detail->status == 'SHOW'){
                $details[$detail->label_id]['label_en'] = $detail->label_en;
                $details[$detail->label_id]['label_si'] = $detail->label_si;
                $details[$detail->label_id]['label_ta'] = $detail->label_ta;
                $details[$detail->label_id]['value'] = $detail->value;
            }
            else{
                $details[$detail->label_id]['label_en'] = null;
                $details[$detail->label_id]['label_si'] = null;
                $details[$detail->label_id]['label_ta'] = null;
                $details[$detail->label_id]['value'] = null;
            }
        }
        return Attribute::make(
            get: fn ($value) => $details,
        );
    }

}
