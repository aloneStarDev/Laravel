<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'customer_id', 'resnumber', 'subscription_month', 'price', 'payment'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
}
