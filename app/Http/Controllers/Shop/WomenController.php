<?php

namespace App\Http\Controllers\Shop;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class WomenController extends Controller
{
		public function index()
	{
	$products = Product::where( 'genre', '=' ,'male' ) ->get();
	return view('shop.menShop',['products' => $products]);
	}

	  public function openProduct($id){
        $product = Product::find($id);
        $categories = $product->categories;
        $category = $categories[0] ->id ;
		
		//\Debugbar::info($same ->id);
		
        return view('shop.single',['product' => $product,'sameProducts'=>$categories[0]->products]);
    }
}
