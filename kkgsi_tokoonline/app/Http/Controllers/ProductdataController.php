<?php

namespace App\Http\Controllers;

use App\Models\Productdata;
use Illuminate\Http\Request;

class ProductdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.product.data');
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
     * @param  \App\Models\Productdata  $productdata
     * @return \Illuminate\Http\Response
     */
    public function show(Productdata $productdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productdata  $productdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Productdata $productdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productdata  $productdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productdata $productdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productdata  $productdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productdata $productdata)
    {
        //
    }
}
