<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'name', 'lastname', 'phonenumber', 'nationCode', 'address', 'registered_items', 'active'
    ];
    protected function files()
    {
        $this->hasMany(File::class);
    }
}
