<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use Auth;

class WishlistController extends Controller
{
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
                     $this->validate($request, array(
                     'user_id'=>'required',
                     'product_id' =>'required',
                     ));
                     
                     $status=Wishlist::where('user_id',Auth::user()->id)
                     ->where('product_id',$request->product_id)
                     ->first();
                     
                     if(isset($status->user_id) and isset($request->product_id))
                     {
                     return redirect()->to('/wishlist.destroy');
                     }
                     else
                     {
                     $wishlist = new Wishlist;
                     
                     $wishlist->user_id = $request->user_id;
                     $wishlist->product_id = $request->product_id;
                     $wishlist->save();                
                     return redirect()->to('MensProduct/'.,$request->product_id);
                     }
    }



   
    public function destroy($id)
    {
        //
    $wishlist = Wishlist::findOrFail($id);
      $wishlist->delete();
    return redirect()->back();

    }

    public function __construct() {
        $this->middleware(['auth']);
    }
}
