<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     // logged in person should not have ability to see login page again
    // redirects to home page
    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index()
    {
        return view('auth.login');
    }

     public function store(Request $request)
     { 
         
         // validate inputs
         $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'

        ]);
        // authenticate and remember token
        if(!auth()->attempt($request->only('email', 'password'),$request->remember)){
            // if fails back to previous page
            return back()->with('status','Invalid login details');
        }
        // redirect
        return redirect()->route('dashboard');
     }
}
