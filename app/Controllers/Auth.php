<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController {
    public function index() {
        //
    }

    public function login() {
        return view("login/index");
    }
}
