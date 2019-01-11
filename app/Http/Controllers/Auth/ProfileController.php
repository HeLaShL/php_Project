<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DebugBar;


class ProfileController extends Controller
{
     public function create()
    {
        return view('profile.profile');
    }

   public function update(ProfileFormRequest $request)
    {
        $user = Auth::user();
        
			$user->name = $request-> get('name');
			$user->address =$request-> get('address');
			$user->city = $request-> get('city');
			$user->state = $request-> get('state');
	        $user->zip = $request-> get('zip');
        if (!$request-> get('password')=='') {
	        $user->password =hash::make($request-> get('password'));
               }

	   
			
		
		$user->save();
			
        return \Redirect::route('account')-> with( 'message', 'Your account has been updated!');

    }
	public function __construct()
	{
	      $this->middleware('auth');
	}
}
