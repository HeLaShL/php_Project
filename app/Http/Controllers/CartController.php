<?php
 
namespace App\Http\Controllers;
use App\Cart;
use App\CartItem;
use Illuminate\Support\Facades\Auth;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class CartController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function addItem ($productId,$quantity){
 
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
        \Debugbar::info($quantity);
        $cartItem  = new Cartitem();
        $cartItem->product_id=$productId;
        $cartItem->quantity=(int)$quantity;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();
 
 
    }
 
    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
 
        $items = $cart->cartItems;
        
        foreach($items as $item){
             $cart_list[]  =
             array(
             'id' => $item->id,
             'imageurl'=>$item->product->imageurl ,
             'name'=>$item->product->name,  
             'quantity'=> $item->quantity,
             'price' => $item->product->price,
             'product_id' => $item->product->id

         );
      //  \Debugbar::info($item->product->price);

        }
      // \debugbar::info($item->product->imageurl);
        echo  json_encode($cart_list); 
    }
 
    public function removeItem($id){
     

         \Debugbar::info($id);

        CartItem::destroy($id);
    }
 
}