<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class DashboardController extends Controller
{
	public function __construct() {
		if(Auth::id() == null) {
			return redirect('login')->with('status', 'Profile updated!');
		}
    }
    public function index() {
    	$user = Auth::user();
    	return view('admin/dashboard');
    }
}
