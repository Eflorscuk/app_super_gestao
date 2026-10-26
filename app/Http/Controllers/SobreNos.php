<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNos extends Controller
{
    public function principal() {
        return view('site.sobre-nos');
    }
}
