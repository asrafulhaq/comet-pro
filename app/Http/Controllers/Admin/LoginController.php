<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show login form 
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Show login System 
     */
    public function adminLoginSystem(Request $request)
    {
        $this -> validate($request , [
            'email'     => 'required|email',
            'password'     => 'required'
        ]);

        if( Auth::guard('admin') -> attempt([ 'email' => $request -> email , 'password' => $request -> password ]) ){

            return redirect() -> route('admin.dashboard');

        }else {
            return redirect() -> route('admin.login') -> with('error', 'Wrong Email or Password');
        }
    }

    /**
     * Admin logout 
     */
    public function adminLogoutSystem()
    {
        Auth::guard('admin') -> logout();
        return redirect() -> route('admin.login');
    }






}
