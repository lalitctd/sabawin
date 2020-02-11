<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
Use App\Roles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function index () {
        $user_list = User::where('users.id', '!=', AUTH::id())
                           ->leftJoin('roles', 'users.role', '=', 'roles.id')
                           ->select('users.*', 'roles.role_name')->orderBy('users.id','desc')
                           ->get();
        $role = Roles::orderBy('id','desc')->get();
    	return view('admin/create-user',['data'=>$role,'userList'=>$user_list]);
    }

    public function createUserInsert(Request $req) {
        $req->validate([
            'name'         => ['required'],
            'email'        => ['required','unique:users'],
            'password'     => ['required'],
            'designation'  => ['required'],
            'phone_number' => ['required','numeric','unique:users'],
            'role'         => ['required'],
        ]);
        $users = new User();
        $users->name          = $req->input('name');
        $users->email         = $req->input('email');
        $users->password      = Hash::make($req->input('password'));
        $users->designation   = $req->input('designation');
        $users->phone_number  = $req->input('phone_number');
        $users->role          = $req->input('role');
        $users->save();
        return redirect('admin/create-user')->with('message','User is created successfully');
        //print_r($req->input());

    }

    public function createRole () {
        $role = Roles::orderBy('id','desc')->get();
    	return view('admin/user-role',['data'=>$role]);
    }

    public function userProfile() {

    	$user = Auth::user();
        
    	return view('admin/user-profile',['data'=> $user]);
    }

    public function createRoleInsert(Request $req) {
        $req->validate([
            'role_name' => ['required','unique:roles'],
        ]);
        $roles = new Roles();
 
        $roles->role_name = $req->input('role_name');
 
        $roles->save();
 
        return redirect('admin/create-role')->with('message','Role is created successfully');
        //print_r($req->input());
    }
}
