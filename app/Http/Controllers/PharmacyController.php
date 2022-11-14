<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index($id)
    {
        $pharmacies = Pharmacy::findOrFail($id);

        return view('pharmacy-page', compact('pharmacies'));
    }
}
