<?php

namespace App\Http\Controllers;

use App\Ad;

class IndexController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('pages.index', compact('ads'));
    }
}
