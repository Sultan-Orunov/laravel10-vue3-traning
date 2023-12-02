<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create()
    {
        return inertia('Auth/Login');
    }

    /**
     * @throws ValidationException
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if (!Auth::attempt($data, true)) {
            throw ValidationException::withMessages([
               'email' => 'Authentication failed'
            ]);
        }
        $request->session()->regenerate();

        return redirect()->intended('/listing');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('listing.index');
    }
}
