<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisteredController extends Controller
{
    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', Rules\Password::defaults()],
        // ]);

        return response()->json($request->input());
    }
}