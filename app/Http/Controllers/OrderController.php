<?php

namespace App\Http\Controllers;

use App\Order;
use App\Driver;
use App\Location;
use App\Product;
use App\Client;
use App\Metric;
use Alert;
use Illuminate\Http\Request;
use App\Http\Requests\OrderUpdateRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with(['driver', 'metric', 'loadingLocation', 'product', 'loadingClient', 'deliveryLocation', 'deliveryClient'])->get();
        // $orders = Order::all();
        // $drivers = Driver::all();
        // ->withPivot(['driver_id', 'metric_id', 'loading_location_id', 'delivery_location_id', 'product_id', 'loading_client_id', 'delivery_client_id'])

        // dd($orders);
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $Order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $Order)
    {
        $id = $Order->id;
        $detail = Order::with(['driver', 'metric', 'loadingLocation', 'product', 'loadingClient', 'deliveryLocation', 'deliveryClient'])->where('id', $id)->first();
        $drivers = Driver::all()->sortBy('lastName')->pluck('full_name', 'id');
        $locations = Location::all()->sortBy('address')->pluck('full_location', 'id');
        $products = Product::all()->sortBy('productNumber')->pluck('full_name', 'id');
        $metrics = Metric::all()->sortBy('name')->pluck('name', 'id');
        $clients = Client::all()->sortBy('name')->pluck('name', 'id');
        $order = $detail->getAttributes();

        // dd($clients);

        return view('orders.createOrUpdate', compact('order', 'drivers', 'locations', 'products', 'metrics', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function update(OrderUpdateRequest $request, Order $Order)
    {
        $validated = $request->validated();
        $Order->update($validated);

        return redirect('orders')->with('success', 'order was successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $Order)
    {
        //
    }
}
