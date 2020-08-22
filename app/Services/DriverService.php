<?php

namespace App\Services;

use App\Driver;

class DriverService
{

    public static function index()
    {
        return Driver::all()->sortBy('lastName');
    }

    public static function show($id)
    {
        return Driver::find($id);
    }

    public static function getAllWithNameandId()
    {
        return self::index()->pluck('full_name', 'id');
    }
}
