<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Autoshop as Auto;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreAutoshopRequest;   // NEREIKIA
// use App\Http\Requests\UpdateAutoshopRequest;  // NEREIKIA

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autoshops = Auto::all();
        return view('services.create', ['autoshops' => $autoshops]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->name = $request->service_name;
        $service->time = $request->service_time;
        $service->price = $request->service_price;
        $service->autoshop_id = $request->autoshop_id;
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $autoshops = Auto::all();
        return view('services.edit', ['service' => $service, 'autoshops' => $autoshops]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->name = $request->service_name;
        $service->time = $request->service_time;
        $service->price = $request->service_price;
        $service->autoshop_id = $request->autoshop_id;
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index');
    }
}
