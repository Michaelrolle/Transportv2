<?php

namespace App\Http\Controllers;

use App\Order;
use Alert;
use App\Events\OrderCreatedEvent;
use PDF;
use App\Http\Requests\OrderUpdateRequest;
use App\Http\Requests\OrderCreateRequest;
use App\Services\OrderService;


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

        $order = $request->validated();
        // dd($order["delivery_client_id"]);
        Order::create($order);
        OrderCreatedEvent::dispatch($order);

        // return redirect('orders')->with('success', 'order was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $order = OrderService::createOrEdit($order);

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
    public function destroy(Order $order)
    {
        Order::destroy($order);

        return redirect('orders')->with('success', 'order was successfully deleted');
    }

    public function downloadPDF(Order $order)
    {
        $pdf = PDF::loadView('orders.pdf', compact('order'));

        return $pdf->download('order' . $order->refNumber . '.pdf');
    }
}
