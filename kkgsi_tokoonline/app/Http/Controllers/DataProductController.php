<?php

namespace App\Http\Controllers;

use App\Models\dataProduct;
use Illuminate\Http\Request;

class DataProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('admin.dataProduct.index');
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
     * @param  \App\Models\dataProduct  $dataProduct
     * @return \Illuminate\Http\Response
     */
    public function show(dataProduct $dataProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataProduct  $dataProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(dataProduct $dataProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataProduct  $dataProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataProduct $dataProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataProduct  $dataProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataProduct $dataProduct)
    {
        //
    }
}
