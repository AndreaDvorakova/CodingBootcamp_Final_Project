<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use Illuminate\Http\Request;

class DrugsController extends Controller
{
    public function index()
    {

        $hero_drug = Drugs::findOrFail(2);


        return view('home-page', compact('hero_drug'));
    }

    public function detail($id)
    {
        $detail_drug = Drugs::findOrFail($id);

        return view('detail', compact('detail_drug'));
    }
}
