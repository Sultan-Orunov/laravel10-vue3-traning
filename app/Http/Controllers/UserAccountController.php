<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{
    public function create(){
        return inertia('UserAccount/Create');
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        Auth::login(User::create($data));

        return redirect()->route('listing.index')
            ->with('message', 'Account created!');
    }
}
