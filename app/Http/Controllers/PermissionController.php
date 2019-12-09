<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:admin');
    }

    /*
		* Get All Permissions
		* Return view
    */
    public function index(){
    	$permissions = Permission::latest()->get();
    }

    /*
		* Create A role
		* Return json Response
    */
    public function store(Request $request){
    	$data = $this->validate($request, [
    		'name' => 'required|string|min:2'
    	]);

    	$store = Permission::create(['name' => $data['name']]);
    	return ($store) ? response()->json(['success' => 'Ok', 'role' => $store], 201);
    }

    /*
		* Update role
		* Return json Response
    */
    public function update(Request $request, Permission $permission){
    	$data = $this->validate($request, [
    		'name' => 'required|string|min:2'
    	]);

    	$update = $permission->update(['name' => $data['name']]);
    	return ($update) ? response()->json(['success' => 'Ok', 'permission' => $update], 200);
    }

    /*
		* Delete permission
 		* Return json Response
   */
    public function destroy(Permission $permission){

    	$destroy = $permission->delete(]);
    	return ($destroy) ? response()->json(['success' => 'Ok', 'permission' => $destroy], 204);
    }

}
