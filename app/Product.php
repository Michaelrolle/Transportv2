<?php

namespace App;

use App\Order;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productNumber', 'name'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function getFullNameAttribute()
    {
        return $this->productNumber . ' ' . $this->name;
    }
}
