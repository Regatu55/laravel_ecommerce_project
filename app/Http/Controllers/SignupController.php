<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignupController extends Controller
{
    public function signup()
    {
        if (Auth::check()) {
            return redirect(route('index'));
        }
        return view('signup');
    }

    public function signupPost(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if (!$user) {
            return redirect(route('signup'))->with('error', 'Registration failed, try again.');
        }

        return redirect(route('signin'))->with('success', 'Registration successful, Signin to access the page.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('signin')->with('success', 'Logout Successfull');
    }
}
