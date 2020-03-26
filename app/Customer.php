<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
//<<<<<<< HEAD
    protected $fillable=['name','lastname','phonenumber','region','address','call','users','expire_subscription','enable','active'];
//=======
//    protected $fillable=[
//        'name','lastname','phonenumber','region','address','subscribtion-time','start-subscribtion','mode','enable','active'
//    ];
//>>>>>>> afd0e56a694d8f5db7a5a7019088b04f20999aa1

//    protected $fillable=[
//        'name', 'lastname', 'phonenumber', 'region', 'address', 'expire_subscription', 'mode', 'enable', 'active'
//    ];

    //please change customers table , fillable after change commented
    public function isSubscribed()
    {
        return $this->expire_subscription > Carbon::now() ? true : false;
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
