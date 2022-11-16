<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drug;
use App\Notifications\ReservationSuccessful;
use Illuminate\Support\Facades\Auth;

class DrugController extends Controller
{

    public function index(Request $request)
    {
        $drugs = Drug::get();

        return $drugs;
    }

    public function searchBar(Request $request)
    {
        if ($request->name) {
            $drugs = Drug::where('name', 'LIKE', '%'.$request->name.'%')->get();
        } else {
            $drugs = Drug::limit($request->limit)->offset($request->offset)->get();
        }

        return $drugs;
    }

        public function sendConfirmation()
    {
        $user = Auth::user();
        
        
        if(!$user) {
            return false;
        }
        

        Notification::send($user, new ReservationSuccessful());
    }
}
