<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\This;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'rollId','ip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function sendCode($phoneNumber,$code,$text = null)
    {
        $client = new Client();
        if($text == null)
            $res = $client->get('https://raygansms.com/SendMessageWithCode.ashx?Username=Amlakonlin&Password=8689811&Mobile=' . $phoneNumber.'&Message='.'املاک آنلاین - کد تایید شما :'.$code);
        else
            $res = $client->get('https://raygansms.com/SendMessageWithCode.ashx?Username=Amlakonlin&Password=8689811&Mobile=' . $phoneNumber.'&Message='.$text);

    }
    function customer()
    {
        $customer = null;
        if($this->getAttribute("rollId") > 0)
            $customer = Customer::where("id",$this->getAttribute("rollId"))->firstOrFail();
        return $customer;
    }

    // remove this method and write in Customer.php because customer_id in payments table reference changes to customer
    //for more details go to payments table migration
    /*public function payments()
    {
        return $this->hasMany('App\Payment');
    }*/
}
//ln -s /home2/amlakonl/laravel/storage/app/public /home2/amlakonl/public_html/storage
