<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function registerview(){
        return view('register');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required','min:5',
            'password'=>'required','min:5',
            'email'=>'required',
        ]);

        User::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('status','registartion sucessfull');
    }
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/homepage');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function homepage(){
        return view('homepage');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/login');
    }
}
