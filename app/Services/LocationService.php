<?php

namespace App\Services;

use App\Location;

class LocationService
{

    public static function index()
    {
        return Location::all()->sortBy('address');
    }

    public static function show($id)
    {
        return Location::find($id);
    }

    public static function getAllWithNameandId()
    {
        return self::index()->pluck('full_location', 'id');
    }
}
