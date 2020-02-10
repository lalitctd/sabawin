<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index() {
    	return view('main');
    }

    public function testSubmit(Request $rq) {
    	//print_r($rq->all());
    	$this->validate( $rq, [
    		'name'  => 'required|alpha',
    	]);  
    	session()->put('data','Some data on session');
    	//dd(session()->get('data'));
    	$data = DB::table('users')->get();
    	dd($data);
    }
}
