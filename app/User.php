<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'rollId',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function sendCode($phoneNumber,$code)
    {
        $client = new Client();
        $client->get('https://raygansms.com/SendMessageWithCode.ashx?Username=Amlakonlin&Password=8689811&Mobile=' . $phoneNumber.'&Message= کد تایید شما :'.$code);
    }
    public function post(){
        return $this->hasMany(File::class);
    }
}
