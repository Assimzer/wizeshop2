<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        return view('cart');
    }

   
    public function store(Request $request)
    {
        
        Cart::add($request->id,$request->name, 1,$request->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success', 'Produit ajouter');
    }

    
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('succes', 'Le produit est ajoutée avec succes');
    }
    public function reset() 
    {
        Cart::destroy();
    }
    public function save($id) 
    {
        $item = Cart::get($id);
        
        Cart::remove($id);

        Cart::instance('save')->add($item->id, $item->name, 1, $item->price)->associate('App\product');
        return redirect()->route('cart.index')->with('succes', 'Product saved for later');
    }
}
