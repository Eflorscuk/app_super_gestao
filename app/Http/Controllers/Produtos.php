<?php

namespace App\Http\Controllers;

class Produtos extends Controller {
    public function index() {
        return view('app.produtos');
    }
}