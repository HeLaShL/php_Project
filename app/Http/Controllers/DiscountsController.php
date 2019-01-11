<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountsController extends Controller
{
    //
	public function index()
	{
	     return view('member.discounts');
	}

}
