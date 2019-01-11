<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
class SingleProductShop extends Controller
{
    
    public function openProduct($id){
        $product = Product::find($id);
        $categories = $product->categories;
        $category = $categories[0] ->id ;
		
		//\Debugbar::info($same ->id);
		
        return view('shop.single',['product' => $product,'sameProducts'=>$categories[0]->products]);
    }
}
