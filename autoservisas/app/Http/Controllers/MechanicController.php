<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
// use App\Http\Requests\StoreMechanicRequest;
// use App\Http\Requests\UpdateMechanicRequest;
use App\Models\Autoshop;
use App\Models\Service;
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

        if ($request->file('mechanic_photo')) {
            $photo = $request->file('mechanic_photo');
            $ext = $photo->getClientOriginalExtension(); //kad galetumem padaryt linka
            $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name. '-' . rand(100, 999). '.' . $ext;

            // $Image = Image::make($photo)->pixelate(12);
            // $Image->save(public_path().'/images/'.$file);  //public_path - serverio

            $photo->move(public_path().'/images', $file);
            $mechanic->photo = asset('/images') . '/' . $file; //asset - urlas
        }

        $mechanic->rating = $request->mechanic_rating;
        $mechanic->autoshop_id = $request->autoshop_id;
        $mechanic->save();
        return redirect()->route('mechanic.index')->with('success_message', 'Successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function show(int $mechanicId)
    {
        $services = Service::all();

        $mechanic = Mechanic::where('id', '=', $mechanicId)->first();  //uzklausa grazina viena rezultata

        return view('mechanic.show', ['mechanic' => $mechanic, 'services' => $services]);
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
        return redirect()->route('mechanic.index')->with('success_message', 'Successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanic $mechanic)
    {
        if ($mechanic->servicesCount->count()) {
            return redirect()->route('mechanic.index')->with('success_message', 'Can not delete because it has services!');
        }
        $mechanic->delete();
        return redirect()->route('mechanic.index')->with('success_message', 'Successfully created!');
    }

    public function deletePicture(Mechanic $mechanic) 
    {

        $name = pathinfo($mechanic->photo, PATHINFO_FILENAME);
        $ext = pathinfo($mechanic->photo, PATHINFO_EXTENSION);

        $path = asset('/images') . '/' . $name . '.' . $ext;

        if(file_exists($path)) {
            unlink($path);
        }
        
        $mechanic->photo = null;
        $mechanic->save();



        return redirect()->back()->with('deleted', 'mechanic have no photo now');
    }
}
