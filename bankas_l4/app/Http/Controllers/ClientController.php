<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreClientRequest;
// use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $clients = Client::all(); // paprasta uzklausa is duomenu bazes -> grazina kolekciju bloka
        // $clients = Client::where('id', '>', 10)->orderBy('name', 'asc')->get(); //kur ID daugiau uz 10
        // $clients = Client::orderBy('name', 'asc')->get();

        $clients = match ($request->sort) {
            'name-asc' => Client::orderBy('name', 'asc')->get(),
            'name-desc' => Client::orderBy('name', 'desc')->get(),
            'surname-asc' => Client::orderBy('surname', 'asc')->get(),
            'surname-desc' => Client::orderBy('surname', 'desc')->get(),
            'funds-asc' => Client::orderBy('funds', 'asc')->get(),
            'funds-desc' => Client::orderBy('funds', 'desc')->get(),
            default => Client::all()
        };
        return view('client.list', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iban = 'LT' . rand(40, 60) . '10100' . rand(10000000000, 99999999999);
        $client = new Client;
        $client->name = $request->name_input;
        $client->surname = $request->surname_input;
        $client->account_nr = $iban;
        $client->social_id = $request->social_id_input;
        $client->funds = 0;
        $client->save();
        return redirect()->route('clients-index')->with('success', 'New client was creted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(int $clientId)
    {
        $client = Client::where('id', '=', $clientId)->first(); //uzklausa grazina viena rezultata

        return view('client.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->name = $request->name_input;
        $client->surname = $request->surname_input;
        $client->social_id = $request->social_id_input;
        $client->save();
        return redirect()->route('clients-index')->with('success', 'You have edited the client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if ($client->funds > 0) {
            return redirect()->route('clients-index')->with('success', 'This client still has money in the account');
        }
        $client->delete();
        return redirect()->route('clients-index')->with('success', 'You have deleted the client');
    }

    public function funds(Client $client)
    {
        return view('client.funds', ['client' => $client]);
    }

    public function addFunds(Request $request, Client $client)
    {
        $client->funds += $request->addfunds_input;
        $client->save();
        return redirect()->route('clients-funds', $client)->with('success', '$$$ You have added the money $$$');
    }

    public function withdrawFunds(Request $request, Client $client)
    {
        if ($client->funds - $request->withdrawfunds_input < 0) {
            return redirect()->route('clients-funds', $client)->with('success', 'Can not withdraw so much money!');
        }
        $client->funds -= $request->withdrawfunds_input;
        $client->save();
        return redirect()->route('clients-funds', $client)->with('success', 'Money is gone!');
    }

    public function editFunds(Request $request, Client $client)
    {
        switch ($request->input('action')) {
            case 'add':
                $client->funds += $request->addfunds_input;
                $client->save();
                return redirect()->route('clients-funds', $client)->with('success', '$$$ You have added the money $$$');
                break;

            case 'withdraw':
                // Preview model
                break;
        }
    }
}
