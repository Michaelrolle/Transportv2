<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable= ['firstName','lastName','driverCode'];
    
    public function order(){
        return $this->hasMany(Order::class);
    }
}

