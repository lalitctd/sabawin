<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function index () {
    	return view('admin/create-user');
    }

    public function createRole () {
    	return view('admin/user-role');
    }

    public function userProfile() {

    	$user = Auth::user();
    	return view('admin/user-profile',['data'=> $user]);
    }
}
