<?php

namespace App\Http\Controllers\Admin;
use App\Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesFormRequest;

class CategoryController extends Controller
{
     public function index(){
        $categories = Category::all();
        return view('admin.categories',['categories' => $categories]);
    }
 
    public function destroy($id){
        Category::destroy($id);
        return redirect('/admin/categories');
    }
 
    public function newCategory(){
        return view('admin.newCategory');
    }
 
    public function add(CategoriesFormRequest $request) {
 
       
 
        $category  = new Category();
        $category->name =$request-> get('name');
       
 
        $category->save();
 
        return redirect('/admin/categories');
 
    }
}
