<?php

namespace App\Http\Controllers;

use App\Models\Autoservice;
use App\Http\Requests\StoreAutoserviceRequest;
use App\Http\Requests\UpdateAutoserviceRequest;

class AutoserviceController extends Controller
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
     * @param  \App\Http\Requests\StoreAutoserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutoserviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autoservice  $autoservice
     * @return \Illuminate\Http\Response
     */
    public function show(Autoservice $autoservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autoservice  $autoservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Autoservice $autoservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutoserviceRequest  $request
     * @param  \App\Models\Autoservice  $autoservice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutoserviceRequest $request, Autoservice $autoservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autoservice  $autoservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autoservice $autoservice)
    {
        //
    }
}
