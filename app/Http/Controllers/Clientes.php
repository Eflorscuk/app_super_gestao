<?php

namespace App\Http\Controllers;

class Clientes extends Controller {
    public function index() {
        return view('app.clientes');
    }
}