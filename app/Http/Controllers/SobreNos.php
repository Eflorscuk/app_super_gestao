<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\HasMiddleware;

class SobreNos extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [];
    }

    public function principal() {
        return view('site.sobre-nos');
    }
}
