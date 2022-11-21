<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\BasketItem;
use Auth;

class BasketItemController extends Controller
{
    // request the info from the onClick function in DrugsToCart.jsx and save to the database
    public function addToCart(Request $request)
    {
        // dd($request);
        // dd(Auth::user());
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            // $basket_id = $request->pharmacy_id;
            $drug_id = $request->drug_id;
            $drug_price = $request->drug_price;
            $quantity = $request->quantity;
            $pharmacy_id = $request->pharmacy_id;
            $basketItem = new BasketItem;

            $drugCheck = Drug::where('id', $drug_id)->first();
            // dd($request);
            if ($drugCheck) {
                // check to see if item is already added to the cart
                if (BasketItem::where('drug_id', $drug_id)->where('pharmacy_id', $pharmacy_id)->where('user_id', $user_id)->exists()) {
                    return response()->json([
                        'status' => 409,
                        'message' => $drugCheck->name . 'Already added to cart',
                    ]);
                } else {
                    $basketItem->user_id = $user_id;
                    // $basketItem->basket_id = $basket_id;
                    $basketItem->drug_id = $drug_id;
                    $basketItem->drug_price = $drug_price;
                    $basketItem->quantity = $quantity;
                    $basketItem->pharmacy_id = $pharmacy_id;
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

    public function show()
    {
        $basketsItems = BasketItem::with('pharmacy')->with('drug')->get()->groupBy('pharmacy_id');
        return $basketsItems;
    }
}
