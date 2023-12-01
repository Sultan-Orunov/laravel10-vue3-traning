<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\StoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create()
    {
        return inertia('Auth/Login');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if (!Auth::attempt($data, true)) {
            throw ValidationException::withMessages([
               'email' => 'Authentication failed'
            ]);
        }
        $request->session()->regenerate();

        return redirect()->intended();
    }

    public function destroy()
    {
        return 'destroy controller';
    }
}
