<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Show all Roles 
     */

    public function index()
    {
        return view('admin.user.role.index');
    }
}
