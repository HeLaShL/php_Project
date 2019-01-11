<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;


class ContactController extends Controller
{
 public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {
         $data = [
         'name' => $request-> get( 'name'),
         'email' => $request->get ('email' ),
         'user_message' => $request-> get( 'message'),
         ];
            \Mail::send( 'emails.contact', $data, function($message)
            {
            $message->from('hela.shl.95@gmail.com');
            $message->to ('hela.shl.95@gmail.com','hela.shl.95@gmail.com')->subject ('WeDewLawns.com Inquiry');
            });
            return \Redirect::route( 'contact')
            -> with( 'message', 'Thanks for contacting us!');
            }
}
