<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function valio()
    {
        return 'valio valio valio!';
    }

    public function rodyk(Request $request)
    {
        $clients = new Client;
        return view('showclients', ['clients' => $clients]);    // view folderis /showclients.blade.php
    }

    public function sukurti()
    {
        $client = new Client;
    }
}
