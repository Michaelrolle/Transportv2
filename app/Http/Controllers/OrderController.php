<?php

namespace App\Http\Controllers;

use App\Order;
use Alert;
use PDF;
use Illuminate\Http\Request;
use App\Http\Requests\OrderUpdateRequest;
use App\Http\Requests\OrderCreateRequest;

use App\Services\DriverService;
use App\Services\LocationService;
use App\Services\OrderService;
use App\Services\ProductService;
use App\Services\MetricService;
use App\Services\ClientService;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = OrderService::index();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $details = OrderService::createOrEdit();

        return view('orders.createOrEdit', $details);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderCreateRequest $request)
    {

        Order::create($request->validated());

        return redirect('orders')->with('success', 'order was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $Order)
    {
        $order = OrderService::show($Order->id);

        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $Order)
    {
        $order = OrderService::createOrEdit($Order->id);

        return view('orders.createOrEdit', $order);
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
        $Order->update($request->validated());

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
        Order::destroy($Order->id);

        return redirect('orders')->with('success', 'order was successfully deleted');
    }

    public function downloadPDF(Order $Order)
    {
        $detail = OrderService::show($Order->id);
        $pdf = PDF::loadView('orders.pdf', compact('detail'));

        return $pdf->download('order' . $detail->refNumber . '.pdf');
    }
}
