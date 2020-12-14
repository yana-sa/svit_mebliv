<?php


namespace App\Http\Controllers;


use Illuminate\View\View;

class ProductController extends Controller
{
    public function showProduct(): View
    {
        return view('product');
    }
}
