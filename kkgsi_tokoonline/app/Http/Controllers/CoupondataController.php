<?php

namespace App\Http\Controllers;

use App\Models\Coupondata;
use Illuminate\Http\Request;

class CoupondataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view();
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
     * @param  \App\Models\Coupondata  $coupondata
     * @return \Illuminate\Http\Response
     */
    public function show(Coupondata $coupondata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupondata  $coupondata
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupondata $coupondata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupondata  $coupondata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupondata $coupondata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupondata  $coupondata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupondata $coupondata)
    {
        //
    }
}
