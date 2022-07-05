<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class SumaController extends Controller
{

    // body (post, put)
    // param (public/suma/1/8)
    // query (public/suma/?) -  ? kaip turetu buti atvaizduota

    public function skirtumas(Request $request)
    {
        // get - gauna is sesijos ir neistrina
        // pull - gauna is sesijos ir trina

        $colors = Color::all();
        $rodyti = $request->session()->get('rezultatas', '');
        return view('post.form', ['ro' => $rodyti, 'colors' => $colors]);  //views folderyje yra post/form '.' = '/'
    }

    public function skaiciuoti(Request $request)
    {
        // put - ideda i sesija
        // flash - ideda i sesija ir istrina
        // with - kartu siuncia duomenis
        $rez = $request->x - $request->y;
        // $request->session()->flash('rezultatas', $rez);
        $color = new Color;  // iraso i MySQL
        $color->color = $rez;
        $color->save();
        dump($rez);
        return redirect()->route('forma')->with('rezultatas', $rez); //su with vienkartinis idejimas
    }
}
