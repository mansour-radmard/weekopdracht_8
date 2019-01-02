<?php

namespace App\Http\Controllers;use App\Ad;

class AdController extends Controller
{
    public function ad($id)
    {
        $ad = Ad::find($id);
        return view('pages.ad', compact('ad'));
    }
}
