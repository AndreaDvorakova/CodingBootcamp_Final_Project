<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drugs;

class DrugsController extends Controller
{
    public function index(Request $request) {
        $drugs = Drugs::get();

        return $drugs;
    }

    public function searchBar(Request $request) {
        if ($request->name) {
            $drugs = Drugs::where('name', 'LIKE', '%'.$request->name.'%')->get();
        } else {
            $drugs = Drugs::get();
        }

        return $drugs;
    }
}
