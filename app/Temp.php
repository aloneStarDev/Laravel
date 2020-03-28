<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    protected $fillable = ["username","password","phonenumber","name","lastname","office","gender","phone_home","email","panel"];
}
