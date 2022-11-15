<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Models\Pharmacy;
use App\Models\Pharmacy_item;
use Illuminate\Http\Request;

class PharmacyItemController extends Controller
{
    public function index(Request $request, $id)
    {

        $pharmacy_items = Pharmacy_item::where('drug_id', $id)->with('pharmacy')->orderBy('drug_price', 'asc')->limit(5)->get();

        return $pharmacy_items;
    }

    public function show($id)
    {
        $pharmacy_item = Pharmacy_item::findOrFail($id);

        return $pharmacy_item;
    }
}
