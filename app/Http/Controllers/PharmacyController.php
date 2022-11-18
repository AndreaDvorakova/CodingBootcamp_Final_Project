<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use App\Models\Pharmacy_item;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index($id)
    {
        $pharmacy = Pharmacy::findOrFail($id);

        return view('pharmacy-page', compact('pharmacy'));
    }

    public function list($id)
    {
        $drug_list = Pharmacy_item::findOrFail($id);

        return view('pharmacy-page', compact('drug_list'));
    }

    // public function dropdown($id)
    // {
    //     $pharmacy = Pharmacy::findOrFail($id);

    //     return view('detail', compact($pharmacy));
    // }

}
