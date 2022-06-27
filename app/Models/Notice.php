<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
