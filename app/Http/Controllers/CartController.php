<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$carts = Cart::with(['user', 'product'])->get();
    	
    	// dd($carts->toArray());
        $products = Product::get();
        // dd($products->toArray());
        return view('pages.cart', compact('products'));
    }



    public function addToCart($id)
    {
    	$carts = Cart::with(['user', 'product'])->get();
        $product = Product::findOrFail($id);
           
        $cart = session()->get('cart', []);
   
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                'count' => $product->count,
                "price" => $product->price,
            ];
        }

        // dd($cart);
           
        session()->put('cart', $cart);
        return redirect('/carts')->with('success', 'Product added to cart successfully!');;
    }
   

    public function destroy(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            

        return redirect('/products');
        }
    }



    

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
         
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $name = $request->name;
//         $count = $request->count;
//         $price = $request->price;

//         $product = new Product();
//         $product->name = $name;
//         $product->count = $count;
//         $product->price = $price;
//         $product->save();
//         return redirect('/products');

//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {   

//         $product = Product::find($id);
//         // dd($product->toArray());

//         return view('pages.products.show', compact('product'));
//     }

//     *
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
     
//     public function edit($id)
//     {
//         $product = Product::find($id);
//          // dd($country->name);

//          return view('pages.products.edit', compact('product'));
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         $product = Product::find($id);

//         $product->name = $request->name;
//         $product->count = $request->count;
//         $product->price = $request->price;
//         $product->save();
//         return redirect('/products');

//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         Product::destroy($id);

//         return redirect('/products');
//     }
}
