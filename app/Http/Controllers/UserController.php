<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{

	public function __construct(){
		$this->middleware('auth');
	}

	public function user(){
		return View('user.user');
	}

}
