<?php

namespace App\Services;

use App\Metric;

class MetricService
{

    public static function index()
    {
        return Metric::all()->sortBy('name');
    }

    public static function show($id)
    {
        return Metric::find($id);
    }

    public static function getAllWithNameandId()
    {
        return self::index()->pluck('name', 'id');
    }
}
