<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Controllers\CartController;

class CartController extends Controller
{
    public function index()
    {
         $products = Product::get();
        return view('pages.cart', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
         // dd($country->name);

         return view('pages.cart', compact('product'));
    }
}
