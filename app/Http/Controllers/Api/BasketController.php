<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    // request the info from the onClick function in DrugsToCart.jsx and save to the database
    public function addToCart(Request $request)
    {
        // dd($request);
        // dd(Auth::user());
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $drug_id = $request->drug_id;
            $drug_price = $request->drug_price;
            $drug_quantity = $request->drug_quantity;
            $total_price = $request->total_price;
            $pharmacy_id = $request->pharmacy_id;

            $drugCheck = Drug::where('id', $drug_id)->first();
            // dd($request);
            if ($drugCheck) {
                if (Basket::where('drug_id', $drug_id)->where('pharmacy_id', $pharmacy_id)->where('user_id', $user_id)->exists()) {
                    return response()->json([
                        'status' => 409,
                        'message' => $drugCheck->name . 'Already added to cart',
                    ]);
                } else {
                    $basketItem = new Basket;
                    $basketItem->user_id = $user_id;
                    $basketItem->drug_id = $drug_id;
                    $basketItem->drug_price = $drug_price;
                    $basketItem->drug_quantity = $drug_quantity;
                    $basketItem->pharmacy_id = $pharmacy_id;
                    $basketItem->total_price = $total_price;
                    $basketItem->save();
                    return response()->json([
                        'status' => 201,
                        'message' => 'Added to Cart',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Product not found',
                ]);
            }

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
