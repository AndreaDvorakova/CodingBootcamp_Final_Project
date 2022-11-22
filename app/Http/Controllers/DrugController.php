<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Pharmacy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DrugController extends Controller
{
    public function index()
    {

        $hero_drug = Drug::findOrFail(1);

        // $phoneInput = "567890890";

        // $isValid = preg_match('/^(\+420)? ?[1-9][0-9]{2} ?[0-9]{3} ?[0-9]{3}$/', $phoneInput);

        // dd($isValid);


        return view('home-page', compact('hero_drug'));
    }

    public function detail($id)
    {
        $detail_drug = Drug::findOrFail($id);

        return view('detail', compact('detail_drug'));
    }


    public function confirmation($code) {
        $user = Auth::user();

        $date = Carbon::now();
        $date->addDays(7);
        $expiration =$date->toDateString();
        
        return view('confirmation', compact('user', 'expiration','code'));
    }


}
