<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function barsukas(Request $request) // Request - ko as noriu, $request kur nuvest
    {
        dump($request->kiekis);
        return 'Valio barsukams!';
    }

    public function briedis(Request $request, $id, $belekas = 'nu ner')  //$belekas optional parametras
    {
        dump($id);
        return 'Valio, Briedis!';
    }


    public function suma($a, $b = '8') // $b - default
    {
        $ab = $a + $b;
        dump($ab);
        return view('suma', ['rezultatas' => $ab]);
    }
}

// --------- LARA START ------------
// laravel new mano-lara (nekurti didziosiomis raidemis)
// php artisan make:controller AnimalController

// --------- MAKE MODEL ------------
// php artisan make:model Color --all  (nerasyti --Colors-- daugiskaita)(rasyti is Didziosios raides)
// php artisan migrate 

// --------- LARA DUMP ----------
// composer require --dev beyondcode/laravel-dump-server
// php artisan dump-server