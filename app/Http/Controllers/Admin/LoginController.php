<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show login form 
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }
}
