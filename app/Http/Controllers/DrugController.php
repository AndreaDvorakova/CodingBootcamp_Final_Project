<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index() {

        $hero_drug = Drug::findOrFail(42);

        
        return view('home-page', compact('hero_drug'));
    }
}
