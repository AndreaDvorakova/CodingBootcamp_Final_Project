<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugsController extends Controller
{
    public function index() {

        $hero_drug = Drug::findOrFail(2);


        return view('home-page', compact('hero_drug'));
    }
}
