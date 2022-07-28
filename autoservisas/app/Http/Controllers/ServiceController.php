<?php

namespace App\Http\Controllers;

use App\Models\Autoshop;
use App\Models\Mechanic;
use App\Models\Service;
use Illuminate\Http\Request;
use Validator;

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
        return view('service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mechanics = Mechanic::all();
        return view('service.create', ['mechanics' => $mechanics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'service_name' => ['required', 'min:5', 'max:64'],
                'service_time' => ['required', 'min:1', 'max:64'],
                'service_price' => ['required', 'min:1', 'max:64'],
            ],
            // [
            //     'service_name.required' => 'Type message you want',
            // ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }

        $service = new Service;
        $service->name = $request->service_name;
        $service->time = $request->service_time;
        $service->price = $request->service_price;
        $service->mechanic_id = $request->mechanic_id;
        $service->save();
        return redirect()->route('service.index')->with('success_message', 'Successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(int $serviceId)
    {
        $autoshops = Autoshop::all();
        $mechanics = Mechanic::all();

        $service = Service::where('id', '=', $serviceId)->first();  //uzklausa grazina viena rezultata

        return view('service.show', ['service' => $service, 'autoshops' => $autoshops, 'mechanics' => $mechanics]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $mechanics = Mechanic::all();
        return view('service.edit', ['service' => $service, 'mechanics' => $mechanics]);
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
        $service->mechanic_id = $request->mechanic_id;
        $service->save();
        return redirect()->route('service.index')->with('success_message', 'Successfully edited!');
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
        return redirect()->route('service.index')->with('success_message', 'Successfully deleted!');
    }
}
