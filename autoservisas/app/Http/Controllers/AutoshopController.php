<?php

namespace App\Http\Controllers;

use App\Models\Autoshop;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreAutoshopRequest;   // NEREIKIA
// use App\Http\Requests\UpdateAutoshopRequest;  // NEREIKIA

class AutoshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autoshops = Autoshop::all();
        return view('autoshop.index', ['autoshops' => $autoshops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autoshop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutoshopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autoshop = new Autoshop;
        $autoshop->name = $request->autoshop_name;
        $autoshop->address = $request->autoshop_address;
        $autoshop->phone_nr = $request->autoshop_phone_nr;
        $autoshop->save();
        return redirect()->route('autoshop.index');
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
        return view('autoshop.edit', ['autoshop' => $autoshop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutoshopRequest  $request
     * @param  \App\Models\Autoshop  $autoshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autoshop $autoshop)
    {
        $autoshop->name = $request->autoshop_name;
        $autoshop->address = $request->autoshop_address;
        $autoshop->phone_nr = $request->autoshop_phone_nr;
        $autoshop->save();
        return redirect()->route('autoshop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autoshop  $autoshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autoshop $autoshop)
    {
        if ($autoshop->mechanicCount()->count()) {
            return 'Trinti negalima, nes turi mechanikus';
        }

        $autoshop->delete();
        return redirect()->route('autoshop.index');
    }
}