<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Show all permnission 
     */

    public function index()
    {
        return view('admin.user.permission.index');
    }
}

