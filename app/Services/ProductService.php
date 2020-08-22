<?php

namespace App\Services;

use App\Product;

class ProductService
{

    public static function index()
    {
        return Product::all()->sortBy('productNumber');
    }

    public static function show($id)
    {
        return Product::find($id);
    }

    public static function getAllWithNameandId()
    {
        return self::index()->pluck('full_name', 'id');
    }
}
