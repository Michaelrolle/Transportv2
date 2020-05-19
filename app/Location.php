<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable= ['address', 'city', 'postCode' ,'country'];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
