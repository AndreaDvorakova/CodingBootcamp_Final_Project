<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketItemController extends Controller
{
    public function index()
    {
        return view('cart-page');
    }
}
