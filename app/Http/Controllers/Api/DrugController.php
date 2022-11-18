<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drug;
use App\Notifications\ReservationSuccessful;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterEmail;
use App\Mail\TestEmail;


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
            $drugs = Drug::offset($request->offset)->limit($request->limit)->get();
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

public function sendTestEmail() {

        // $data = 'This is data';

        Mail::to('test@test.com')
            // ->cc('copy@example.com')
            // ->bcc('hidden_copy@example.com')
            ->send(new TestEmail());

    }
}
