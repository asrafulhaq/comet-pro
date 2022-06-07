<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RoleController extends Controller
{
    /**
     * Show all Roles 
     */

    public function index()
    {
        $permissions = Permission::all();
        $roles = Role::latest() -> get();
        $type = 'add';
        return view('admin.user.role.index', compact('permissions', 'roles', 'type'));
    }

    /**
     * Store all data 
     */
    public function store(Request $request)
    {
        $this -> validate( $request,  [
            'name'      => 'required|unique:roles'
        ]);


        Role::create([
            'name'              => $request -> name,
            'slug'              => Str::slug($request -> name), 
            'permission'        =>  json_encode($request -> per)
        ]);

        return back() -> with('success', 'Role added successful');


    }

    /**
     * Delete role data 
     */
    public function destroy($id)
    {
       $delete_data =  Role::findOrFail($id);
       $delete_data -> delete();
       return redirect() -> route('admin.role') -> with('success-main' , 'Role Data deleted');
    }

    /**
     * Edit role data 
     */
    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::findOrFail($id);
        $roles = Role::latest() -> get();
        $type = 'edit';
        return view('admin.user.role.index', compact('permissions', 'roles', 'role', 'type'));
    }



    /**
     * Update Role Data 
     */

     public function update(Request $request, $id)
     {

        $this -> validate($request, [
            'name'  => 'required'
        ]);


       $update_data =  Role::findOrFail($id);

       $update_data -> update([
           'name'       => $request -> name,
           'slug'       => Str::slug($request -> name),
           'permission' => json_encode($request -> per)
       ]);

       return redirect() -> route('admin.role') -> with('success-main', 'Roel data updated');
       

     }


}
