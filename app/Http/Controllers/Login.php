<?php

namespace App\Http\Controllers;


class Login extends Controller {
    public function index() {
        return view('site.login');
    }

    public function autenticar() {
        return 'chegamos até aqui';
    }
}