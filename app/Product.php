<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= ['productNumber', 'name'];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
