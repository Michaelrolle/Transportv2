<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all()->sortBy('lastName');

        // dd($drivers);
        return view('drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driverCodes = Driver::distinct()->get('driverCode')->sortBy('driverCode');
        // dd($driverCodes);
        return view('drivers.createOrUpdate', compact('driverCodes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'driverCode' => 'required'
        ]);

        // dd($request);

        Driver::updateOrCreate(['id' => $request->id], [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'driverCode' => $request->driverCode
        ]);
        return redirect('drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        $editDriver = Driver::find($driver)->first();
        $driverCodes = Driver::distinct()->get('driverCode')->sortBy('driverCode');
        // dd($driverCodes);
        return view('drivers.createOrUpdate', compact(['editDriver', 'driverCodes']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
