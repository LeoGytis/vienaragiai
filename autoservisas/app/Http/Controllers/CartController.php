<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Auth;


class CartController extends Controller
{
    public function add(Request $request)
    {
        // dd($request->all());

        $cart = new Cart;

        $cart->count = $request->services_count;
        $cart->service_id = $request->service_id;
        $cart->user_id = Auth::user()->id;

        $cart->save();
    }
}
