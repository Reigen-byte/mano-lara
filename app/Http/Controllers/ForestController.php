<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForestController extends Controller
{
    public function labas(Request $request, $color, $size) 
    {
        return view('bebras', 
    ['color' => $color,
    'size' => $size,
    'word' => $request->a]);
    }
}
