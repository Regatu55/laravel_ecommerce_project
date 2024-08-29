<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function signin()
    {
        if (Auth::check()) {
            return redirect(route('index'));
        }
        return view('home.signin');
    }

    public function signinPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('product.list'))->with('success', 'Signin details are valid.');
        }
        
        return redirect(route('signin'))->with('error', 'Signin  details are not valid.');
    }
}
