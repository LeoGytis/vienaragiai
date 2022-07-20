<?php

namespace App\Http\Controllers;

use App\Models\Autoshop;
use App\Http\Requests\StoreAutoshopRequest;
use App\Http\Requests\UpdateAutoshopRequest;

class AutoshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAutoshopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutoshopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autoshop  $autoshop
     * @return \Illuminate\Http\Response
     */
    public function show(Autoshop $autoshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autoshop  $autoshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Autoshop $autoshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutoshopRequest  $request
     * @param  \App\Models\Autoshop  $autoshop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutoshopRequest $request, Autoshop $autoshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autoshop  $autoshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autoshop $autoshop)
    {
        //
    }
}
