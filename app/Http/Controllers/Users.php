<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function submit( Request $rq ) {

    	$rq->validate([
    		'user'     => 'required',
    		'phone'    => 'required|min:20',
    		'password' => 'required|min:3|max:5'
    	]);
    	print_r($rq->input());	
    }
}
