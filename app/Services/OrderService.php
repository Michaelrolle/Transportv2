<?php

namespace App\Services;

use App\Services\DriverService;
use App\Services\LocationService;
use App\Services\ProductService;
use App\Services\MetricService;
use App\Services\ClientService;

use App\Order;

class OrderService
{

    public static function index()
    {
        return Order::all();
    }

    public static function show($id)
    {
        return Order::find($id);
    }

    public static function createOrEdit($id = null)
    {
        $order = self::show($id);
        $drivers = DriverService::getAllWithNameandId();
        $locations = LocationService::getAllWithNameandId();
        $products = ProductService::getAllWithNameandId();
        $metrics = MetricService::getAllWithNameandId();
        $clients = ClientService::getAllWithNameandId();

        $data = [
            'order' => $order,
            'drivers' => $drivers,
            'locations' => $locations,
            'products' => $products,
            'metrics' => $metrics,
            'clients' => $clients
        ];

        return $data;
    }
}
