<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Show all Roles 
     */

    public function index()
    {
        $permissions = Permission::all();
        $roles = Role::latest() -> get();
        return view('admin.user.role.index', compact('permissions', 'roles'));
    }

    /**
     * Store all data 
     */
    public function store(Request $request)
    {
        $this -> validate( $request,  [
            'name'      => 'required'
        ]);


        Role::create([
            'name'              => $request -> name,
            'slug'              => Str::slug($request -> name), 
            'permission'        =>  json_encode($request -> per)
        ]);

        return back() -> with('success', 'Role added successful');


    }
}
