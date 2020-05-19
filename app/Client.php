<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable= ['name','email','phoneNumber'];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
