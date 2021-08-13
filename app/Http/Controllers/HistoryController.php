<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

use Auth;

class HistoryController extends Controller
{
    public function index()
    {
       $carts = Cart::where('user_id', Auth::id())->with(['user', 'product'])->get();
        // dd($carts->toArray());
        // $products = Product::get();
        // dd($products->toArray());
        return view('pages.products.histories', compact('carts'));
    }

   public function histories()
    {

        $cart = Cart::where('user_id', Auth::id())->first();
       // dd($cart->toArray());

        if($cart == null){
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $id;
            $cart->count = 1;
            $cart->price = $cart->count;
            dd($cart);
            
        } else{
            $cart->count++;
        }

        $cart->save();
        return redirect('/carts');

    }
}
