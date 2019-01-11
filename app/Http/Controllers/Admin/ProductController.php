<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsFormRequest;
use debuger;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('admin.products',['products' => $products ]);
    }
 
    public function destroy($id){
        Product::destroy($id);
        return redirect('/admin/products');
    }
 
    public function newProduct(){
        $categories = Category::all();
        return view('admin.new',['categories' => $categories]);
    }
 
    public function add(ProductsFormRequest $request) {
  
        $categorie_id = $request-> get('categorie_id');
        $category = Category::find($categorie_id);
        $product  = new Product();
        $product->name =$request-> get('name');
        $product->description =$request-> get('description');
        $product->price =$request-> get('price');

         $imageName = time().'.'.$request->file('imageurl')->getClientOriginalExtension();
        $request->file('imageurl')->move(base_path().'/public/images/',$imageName);
        $product->imageurl =$imageName;

        $product->quantity =$request-> get('quantity');

        $product->genre =$request-> get('genre');
        $product->save();
        $product->categories()->save($category);
        return redirect('/admin/products');
 
    }
}
