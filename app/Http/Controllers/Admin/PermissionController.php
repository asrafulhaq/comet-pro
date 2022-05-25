<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Show all permnission 
     */

    public function index()
    {
        $data = Permission::latest() -> get();
        return view('admin.user.permission.index', [
            'all_data'      => $data,
            'form_type'     => 'add'
        ]);
    }


     /**
     * Show all permnission 
     */

    public function edit($id)
    {
        $data = Permission::latest() -> get();
        $single = Permission::findOrFail($id);
        return view('admin.user.permission.index', [
            'edit_data'      => $single, 
            'all_data'     => $data,
            'form_type'     => 'edit' 
        ]);
    }

    /**
     * Data Store 
     */
    public function store(Request $request)
    {
        // valication
        $this -> validate($request, [
            'name'      => 'required'
        ]);

        Permission::create([
            'name'      => $request -> name,
            'slug'      => Str::slug($request -> name)
        ]);

        return back() -> with('success' , 'Permission Added successful');

    }

    /**
     * Destroy data 
     */
    public function destroy($id)
    {
        $delete_data = Permission::findOrFail($id);
        $delete_data -> delete();
        return back() -> with('success-main', 'Permission deleted successful');
    }

    /**
     * Permission update 
     */
    public function update(Request $request, $id)
    {
        $update_data = Permission::findOrFail($id);
        $update_data -> update([
            'name'  => $request -> name,
            'slug'  => Str::slug($request -> name)
        ]);
        return redirect() -> route('admin.permission') -> with('success', 'Permission updated successful');
    }



}

