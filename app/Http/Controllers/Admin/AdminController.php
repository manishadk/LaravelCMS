<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		// dd('rtrr');
		return view('admin.fixed');
	}

	// public function test(){
	// 	return view('admin/layouts/fixed');

	// }
}


?>