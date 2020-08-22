<?php

namespace App\Services;

use App\Client;

class ClientService
{

    public static function index()
    {
        return Client::all()->sortBy('name');
    }

    public static function show($id)
    {
        return Client::find($id);
    }

    public static function getAllWithNameandId()
    {
        return self::index()->pluck('name', 'id');
    }
}
