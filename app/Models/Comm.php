<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lang;
use Carbon\Carbon;

class Comm extends Model
{
    use HasFactory;
    
    public static function decodeYesNo($code)
    {
        if($code == NULL){
            return NULL;
        }
        else {
            $langs = explode(',', Lang::get('comm.cmb_genYesNo'));
            $langs = array_combine(range(1, count($langs)), $langs);
            return $langs[$code];
        }
    }

    public static function getYesNo()
    {
        $langs = explode(',', Lang::get('comm.cmb_genYesNo'));
        $langs = array_combine(range(1, count($langs)), $langs);
        return $langs;
    }


    private static function statuses(){
        return ['ACTIVE' => Lang::get('common.status_active'),
                'INACTIVE' => Lang::get('common.status_inactive')
            ];
    }

    public static function decodeStatus($code=null)
    {
        return $code?(self::statuses()[$code]??null):null;
    }

    public static function getStatuses()
    {   
        return self::statuses(); 
    }

    private static function menuStatuses(){
        return ['SHOW' => Lang::get('common.status_show'),
                'HIDE' => Lang::get('common.status_hide')
            ];
    }

    public static function decodeMenuStatuses($code=null)
    {
        return $code?(self::menuStatuses()[$code]??null):null;
    }

    public static function getMenuStatuses()
    {   
        return self::menuStatuses(); 
    }

    public static function getNow()
    {   $now = Carbon::now()->format('Y-m-d H:i:s');
        return $now;
    }
    public static function getToday()
    {   $today = Carbon::today()->format(config('app.date_format'));
        //dd($today);
        return $today;
    }

    public static function toDateString($date=null)
    {   
        $date = $date ? Carbon::parse($date)->format(config('app.date_format')) : self::getToday();
        //dd($date);
        return $date;
    }

    public static function toImportDateString($date=null)
    {   
        $date = $date ? Carbon::parse($date)->format(config('app.date_format_import','Y-m-d')) : Carbon::today()->format(config('app.date_format_import','Y-m-d'));
        //dd($date);
        return $date;
    }

    public static function strToDate($date=null)
    {
        //$date = $date ? date('Y-m-d',strtotime( $date )) : Carbon::today()->format('Y-m-d');
        //dd($date);
        $date = $date ? Carbon::createFromLocaleFormat(config('app.date_format'), app()->getLocale(), $date)->format('Y-m-d') : Carbon::today()->format('Y-m-d');

        return $date;
    }

    public static function strToMonth($month=null)
    {
        $month = $month ? Carbon::createFromLocaleFormat('F', app()->getLocale(), $month)->format('m') : Carbon::today()->format('m');

        return $month;
    }

    public static function thisMonth()
    {
        return Carbon::today()->format('m');
    }

    public static function thisMonthFirstDay($date=null)
    {
        return $date ? Carbon::parse($date)->firstOfMonth()->format('Y-m-d') : Carbon::today()->firstOfMonth()->format('Y-m-d');
    }

    public static function thisMonthLastDay($date=null)
    {
        return Carbon::parse(self::thisMonthFirstDay($date))->endOfMonth()->format('Y-m-d');
    }

}
