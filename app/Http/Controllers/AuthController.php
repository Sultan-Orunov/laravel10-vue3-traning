<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return inertia('Auth/Login');
    }

    public function store(){
        return 'store controller';
    }

    public function destroy(){
        return 'destroy controller';
    }
}
