<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drug;

class DrugsController extends Controller
{
    public function index(Request $request) {
        $drugs = Drug::get();

        return $drugs;
    }

    public function searchBar(Request $request) {
        if ($request->name) {
            $drugs = Drug::where('name', 'LIKE', '%'.$request->name.'%')->get();
        } else {
            $drugs = Drug::get();
        }

        return $drugs;
    }
}
