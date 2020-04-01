<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'code',
        'buy',
        'rahn',
        'ejare',
        'name',
        'lastname',
        'buildingType',
        'region',
        'floor',
        'area',
        'age',
        'unit',
        'bedroom',
        'addressPu',
        'addressPv',
        'phonenumber',
        'description',
        'visible',
        'deleted',
        'user_id',
        'floorCovering',
        'cabinet',
        'floorCount',
        'heating',
        'cooling',
        'direction',
        'view',
        'document'
    ];
    public static $bulbing_type = [
        1 => "ویلایی",
        2 => "آپارتمان",
        3 => "اداری و تجاری",
        4 => "زمین کلنگی",
    ];
    public static $region_map = [
        1 => "منطقه ی یک",
        2 => "منطقه ی دو",
        3 => "منطقه ی سه",
        4 => "منطقه ی چهار",
        5 => "منطقه ی پنج",
        6 => "منطقه ی شش",
        7 => "منطقه ی هفت",
        8 => "منطقه ی هشت",
        9 => "منطقه ی نه",
        10 => "منطقه ی ده",
        11 => "منطقه ی یازده",
        12 => "منطقه ی دوازده",
        13 => "منطقه ی سیزده",
        14 => "منطقه ی ثامن"
    ];
    public static $floor_covering = [
        1 => "سرامیک",
        2 => "پارکت",
        3 => "موکت",
        4 => "ندارد"
    ];
    public static $cabinet_ = [
        1 => "ام دی اف",
        2 => "های گلس",
        3 => "چوب",
        4 => "فلز"
    ];
    public static $direction_ = [
        1 => "شمالی",
        2 => "جنوبی",
        3 => "شرقی",
        4 => "غربی",
        5 => "دو نبش",
        6 => "دوممر"
    ];
    public static $cooling_ = [
        1 => "کولر آبی",
        2 => "کولر گازی",
        3 => "هوا ساز",
        4 => "چیلر و فن کوئل"
    ];
    public static $heating_ = [
        1 => "بخاری",
        2 => "پکیج و شوفاژ",
        3 => "هوا ساز",
        4 => "چیلر و فن کوئل"
    ];
    public static $view_ = [
        1 => "سنگ",
        2 => "آجر سه سانت",
        3 => "سیمان",
        4 => "غیره"
    ];
    public static $document_ = [
        1 => "ششدانگ اوقاف",
        2 => "ششدانگ آستانه",
        3 => "ششدانگ ملکی",
        4 => "مشاع",
        5 => "وکالتی",
        6 => "قولنامه ای"
    ];
    public static function floatPrice($price)
    {
        $num = explode('.',$price);
        $real = $num[0];
        if(count($num) > 1){
            $float = $num[1];
            $text = "";
            if((int) $real != 0) {
                if (strlen($float) == 1)
                    $text = $real . " میلیون و " . ((int)$float * 100) . " هزار تومان ";
                if (strlen($float) == 2)
                    $text = $real . " میلیون و " . ((int)$float * 10) . " هزار تومان ";
                if (strlen($float) == 3)
                    $text = $real . " میلیون و " . $float . " هزار تومان ";
            }else{
                if (strlen($float) == 1)
                    $text =((int)$float * 100) . " هزار تومان ";
                if (strlen($float) == 2)
                    $text =((int)$float * 10) . " هزار تومان ";
                if (strlen($float) == 3)
                    $text =$float . " هزار تومان ";
            }
            return $text;
        }else{
            return $real." میلیون تومان";
        }
    }
}
