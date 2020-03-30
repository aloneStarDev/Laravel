<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=['code','buy','rahn','ejare','name','lastname','buildingType','region','floor','area','age','unit','bedroom','addressPu','addressPv','phonenumber','options','description','userId','visible','deleted'];
    public static $bulbing_type=[
        1=>"ویلایی",
        2=>"آپارتمان",
        3=>"اداری و تجاری",
        4=>"زمین کلنگی",
    ];
    public static $region_map = [
      1=>"منطقه ی یک",
      2=>"منطقه ی دو",
      3=>"منطقه ی سه",
      4=>"منطقه ی چهار",
      5=>"منطقه ی پنج",
      6=>"منطقه ی شش",
      7=>"منطقه ی هفت",
      8=>"منطقه ی هشت",
      9=>"منطقه ی نه",
      10=>"منطقه ی ده",
      11=>"منطقه ی یازده",
      12=>"منطقه ی دوازده",
      13=>"منطقه ی سیزده",
      14=>"منطقه ی ثامن"
    ];
}
