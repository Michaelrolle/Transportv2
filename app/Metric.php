<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    protected $fillable= ['name'];

    public function order(){
        $this->hasMany(Order::class);
    }
}
