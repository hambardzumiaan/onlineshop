<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

class HistoryController extends Controller
{
    public function index()
    {
    	$carts = Cart::with(['user', 'product'])->get();
    	// dd($carts->toArray());
        $products = Product::get();
        // dd($products->toArray());
        return view('pages.products.histories', compact('products'));
    }

   public function histories()
    {
    	dd(1);
    }
}
