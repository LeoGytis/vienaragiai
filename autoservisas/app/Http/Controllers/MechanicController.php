<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
// use App\Http\Requests\StoreMechanicRequest;
// use App\Http\Requests\UpdateMechanicRequest;
use App\Models\Autoshop;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = Mechanic::all();
        return view('mechanic.index', ['mechanics' => $mechanics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autoshops = Autoshop::all();
        return view('mechanic.create', ['autoshops' => $autoshops]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMechanicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mechanic = new Mechanic;
        $mechanic->name = $request->mechanic_name;
        $mechanic->surname = $request->mechanic_surname;
        $mechanic->photo = $request->mechanic_photo;
        $mechanic->rating = $request->mechanic_rating;

        $mechanic->autoshop_id = $request->autoshop_id;
        $mechanic->save();
        return redirect()->route('mechanic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanic $mechanic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanic $mechanic)
    {
        $autoshops = Autoshop::all();
        return view('mechanic.edit', ['mechanic' => $mechanic, 'autoshops' => $autoshops]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMechanicRequest  $request
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mechanic $mechanic)
    {
        $mechanic->name = $request->mechanic_name;
        $mechanic->surname = $request->mechanic_surname;
        $mechanic->photo = $request->mechanic_photo;
        $mechanic->rating = $request->mechanic_rating;
        $mechanic->autoshop_id = $request->autoshop_id;
        $mechanic->save();
        return redirect()->route('mechanic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();
        return redirect()->route('mechanic.index');
    }
}
