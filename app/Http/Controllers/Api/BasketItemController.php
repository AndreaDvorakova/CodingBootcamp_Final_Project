<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketItemController extends Controller
{
    public function addToCart(Request $request)
    {
        if (auth('sanctum')->check()) {
            return response()->json([
                'status' => 201,
                'message' => 'Cart',
            ]);
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Login to Add to Cart',
            ]);
        }
    }
}
