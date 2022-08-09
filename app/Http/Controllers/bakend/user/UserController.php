<?php

namespace App\Http\Controllers\bakend\user;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        $trash = User::onlyTrashed()->get();
        return view('bakend.user.index',compact('user','trash'));
    }
    public function edit($id){
        $roles = Role::all();
        $users =  User::find($id);
       
        return view('bakend.user.edit',compact('roles','users'));
    }
    public function update( Request $request, $id){
        $users =  User::find($id);
        $users->syncRoles($request->role);
        return redirect(route('user.index'));
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return back();  
    }
    public function restore($id){
        User::withTrashed()
        ->where('id', $id)
        ->restore();
        return back();
    }
    public function permanentDestroy($id){
        $user = User::withTrashed()
        ->where('id', $id);
        $userRole = $user->first()->roles->first()->name ;      
       $role = $user->first()->removeRole($userRole);
         $user->forceDelete();
         return back();
    }
    public function ban($id){
        $user = User::find($id);
        if($user->status == 0){
            $user->status = 1;
        }else{
            $user->status = 0;
        }
        $user->save();
        return back();

    }

    public function userPermission($id){
        $user = User::with('permissions')->find($id);
        $permission = Permission::all();
        // dd($user);
       return view('bakend.user.permission',compact('user','permission'));
    }
    public function userPermissionUpdate(Request $request , $id){
       $request->validate([
           'name' => 'required',
       ]);
       $user = User::find($id);
      $user->syncPermissions($request->name);
      return back();
    }

}
