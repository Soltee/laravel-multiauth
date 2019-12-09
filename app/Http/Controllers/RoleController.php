<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

// $role = Role::create(['name' => 'writer']);
// $permission = Permission::create(['name' => 'edit articles']);
// 

class RoleController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:admin');
    }

    /*
		* Get All Roles
		* Return view
    */
    public function index(){
    	$roles = Role::latest()->get();
    }

    /*
		* Create A role
		* Return json Response
    */
    public function store(Request $request){
    	$data = $this->validate($request, [
    		'name' => 'required|string|min:2'
    	]);

    	$store = Role::create(['name' => $data['name']]);
    	return ($store) ? response()->json(['success' => 'Ok', 'role' => $store], 201);
    }

    /*
		* Update role
		* Return json Response
    */
    public function update(Request $request, Role $role){
    	$data = $this->validate($request, [
    		'name' => 'required|string|min:2'
    	]);

    	$update = $role->update(['name' => $data['name']]);
    	return ($update) ? response()->json(['success' => 'Ok', 'role' => $update], 200);
    }

    /*
		* Delete role
 		* Return json Response
   */
    public function destroy(Role $role){

    	$destroy = $role->delete(]);
    	return ($destroy) ? response()->json(['success' => 'Ok', 'role' => $destroy], 204);
    }
}
