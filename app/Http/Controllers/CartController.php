<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    use Cart;

public function index()
{
    $cartItems = Cart::instance('cart')->content();
    return view('cart', compact('cartItems'));
}
}
