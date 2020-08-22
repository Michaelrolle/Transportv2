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
        return Order::with(['driver', 'metric', 'loadingLocation', 'product', 'loadingClient', 'deliveryLocation', 'deliveryClient'])->get();
    }

    public static function show($id)
    {
        return Order::with(['driver', 'metric', 'loadingLocation', 'product', 'loadingClient', 'deliveryLocation', 'deliveryClient'])->find($id);
    }

    public static function create()
    {
        $drivers = DriverService::getAllWithNameandId();
        $locations = LocationService::getAllWithNameandId();
        $products = ProductService::getAllWithNameandId();
        $metrics = MetricService::getAllWithNameandId();
        $clients = ClientService::getAllWithNameandId();

        $data = ['drivers' => $drivers, 'locations' => $locations, 'products' => $products, 'metrics' => $metrics, 'clients' => $clients];

        return $data;
    }
}
