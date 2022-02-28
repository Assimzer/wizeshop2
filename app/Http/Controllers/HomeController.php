<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $products = Product::inRandomOrder()->take(8)->get();
        return view('home', [
            'products' => $products
        ]);
    }
    public function contact() {
        return view('contact');
    }
    public function shop() {
        return view('shop');
    }
    
    public function product() {
        return view('product');
    }
    public function orders() {
        return view('orders');
    }
    public function checkout() {
        return view('checkout');
    }
    public function succes() {
        return view('succes');
    }
}
