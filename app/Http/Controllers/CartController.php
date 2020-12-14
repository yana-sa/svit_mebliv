<?php


namespace App\Http\Controllers;


use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{
    public function showCart(): View
    {
        return view('content.cart');
    }

    public function addToCart()
    {

    }

    public function removeFromCart()
    {

    }

}
