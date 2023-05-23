<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/contact-information';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin(){

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

    $validator = Validator::make($credentials, [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    if (Auth::attempt($credentials)) {
        // Authentication successful
        return redirect()->intended('/contact-information');
    } else {
        // Authentication failed
        return redirect()->back()->withErrors(['auth' => 'Invalid credentials'])->withInput();
    }
        
    }
    
}
