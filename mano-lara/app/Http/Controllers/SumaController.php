<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function skirtumas(Request $request)
    {
        $rodyti = $request->session()->pull('rezultatas', ''); //get  - neistirina is sesijos, pull - gauna ir trina
        return view('post.form', ['ro' => $rodyti]);  //views folderyje yra post/form
    }

    public function skaiciuoti(Request $request)
    {
        $rez = $request->x - $request->y;
        $request->session()->put('rezultatas', $rez);
        dump($rez);
        return redirect()->route('forma');
    }
}
