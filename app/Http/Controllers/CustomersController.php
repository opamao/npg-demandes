<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elielelie\Sap\Sap;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $parameters = [
        //     'ashost' => 'my.sap.system.local',
        //     'sysnr'  => '00',
        //     'client' => '123',
        //     'user' => 'DEMO',
        //     'passwd' => 'XXXX',
        // ];

        // // connect
        // $connection = new SAPNWRFC\Connection($parameters);

        // // do work here

        // // close the connection
        // $connection->close();

        // $sap = app(Sap::class);
        // $connection = $sap->open();
        // // dd('next');

        // $function = $connection->fm('ZBAPI_GET_STOCK_RESERVE');

        // // Get function description.
        // dd($function->description());

        // // Add import parameter.
        // $function->param('USERNAME', 'USER');

        // // Perform function call and retrieve result.
        // $results = $function->execute();

        // $connection->close();

        return view('customers.customers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
