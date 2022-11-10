<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drugs;

class DrugsController extends Controller
{
    public function index() {
        $drugs = Drugs::get();

        return $drugs;
    }
}
