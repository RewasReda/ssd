<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
class CartController extends Controller
{
    
    public function index()
    {
        return view('products');
    }
 
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
 
    }
}
