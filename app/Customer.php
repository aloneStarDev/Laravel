<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['office','name','lastname','ipCount','email','phonenumber','region','address','call',"panel",'expire_subscription','enable','active'];

    public function isSubscribed()
    {
        if($this->getAttributeValue("expire_subscription") != null)
            return $this->getAttributeValue("expire_subscription") > Carbon::now() ? true : false;
        else
            return false;
    }
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public static function IranMobile($value,$parameters = null)
    {
        if ((bool) preg_match('/^(((98)|(\+98)|(0098)|0)(9){1}[0-9]{9})+$/', $value) || (bool) preg_match('/^(9){1}[0-9]{9}+$/', $value))
            return true;
        if((bool) preg_match('/^(\+98|0)?\d{10}$/',$value))
            return true;
        return false;
    }
}
