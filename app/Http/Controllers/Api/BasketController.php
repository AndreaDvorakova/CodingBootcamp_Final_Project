<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Drug;
use Illuminate\Http\Request;
use Auth;

class BasketController extends Controller
{
    public function addToCart(Request $request)
    {

        // dd($request);
        // dd(Auth::user());
        if (auth('sanctum')->check()) {
            $total_price = $request->total_price;
            $user_id = auth('sanctum')->user()->id;
            $sms_code = $request->sms_code;
            $order_status = $request->order_status;

            $basket = new Basket;
            $basket->user_id = $user_id;
            $basket->total_price = $total_price;
            $basket->sms_code = $sms_code;
            $basket->order_status = $order_status;
            $basket->save();

            return response()->json([
                'status' => 201,
                'message' => 'In cart',
            ]);
            // $user_id = auth('sanctum')->user()->id;
            // // $basket_id = $request->pharmacy_id;
            // $total_price = $request->total_price;
            // $basketItem = new BasketItem;
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Log in to add to cart',
            ]);
        }
    }
}
