<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['firstName', 'lastName', 'driverCode'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function getFullNameAttribute()
    {
        return $this->lastName . ' ' . $this->firstName . ' ' . $this->driverCode;
    }
}
