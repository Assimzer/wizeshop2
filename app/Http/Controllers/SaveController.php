<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class SaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $item = Cart::instance('save')->get($id);
        Cart::instance('save')->remove($id);

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('succes', 'produit ajouter au panier ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('save')->remove($id);
        return back()->with('succes', 'produit a été supprimer');
    }
}
