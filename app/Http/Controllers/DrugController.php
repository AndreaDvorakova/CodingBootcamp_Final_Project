<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Pharmacy;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index()
    {

        $hero_drug = Drug::findOrFail(1);


        return view('home-page', compact('hero_drug'));
    }

    public function detail($id)
    {
        $detail_drug = Drug::findOrFail($id);

        return view('detail', compact('detail_drug'));
    }


    public function confirmation() {
        $order = [23456, '420 777 567 839']; 
        return view('confirmation', compact('order'));
    }

    // public function city($city)
    // {
    //     $cities = Pharmacy::findOrFail("city");
        
    //     return view('detail', compact('cities'));
    // }
}
