<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::resource( 'about', 'AboutController', [ 'only' => ['index' ]]);


Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
Route::resource( 'contact', 'ContactController', [ 'only' => ['create', 'store']]);


Auth::routes();

Route::get('/home','HomeController@index');


Route::resource( 'test', 'testController', [ 'only' => ['index']]);

Route::resource( 'discounts', 'DiscountsController', [ 'only' => ['index' ]]);
Route::get( 'discounts', [
'middleware' => 'auth',
'uses' => 'DiscountsController@index'
]);


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('account', 
  ['as' => 'account', 'uses' => 'ProfileController@create']);

Route::post('account.update', 'ProfileController@update');

Route::resource( 'account', 'ProfileController', [ 'only' => ['create', 'update']]);



Route::group([
'middleware' => 'admin'
], function() {
Route::get('/admin/product/new', 'Admin\ProductController@newProduct');
Route::get('/admin/products', 'Admin\ProductController@index');
Route::get('/admin/product/destroy/{id}', 'Admin\ProductController@destroy');
Route::post('/admin/product/save', 'Admin\ProductController@add');


Route::get('/admin/category/newCategory', 'Admin\CategoryController@newCategory');
Route::get('/admin/categories', 'Admin\CategoryController@index');
Route::get('/admin/category/destroy/{id}', 'Admin\CategoryController@destroy');
Route::post('/admin/category/save', 'Admin\CategoryController@add');
});

Route::get('/images/{filename}',function($filename)
{
$path = base_path().'/public/images/'.$filename;
if (!File::exists($path)) abort(404);
$file = File::get($path);
$type = File::mimeType($path);
$response=Response::make($file,200);
$response ->header("content-Type",$type);
return $response;
  
})->name('avatar');



Route::get('MensProduct', 'Shop\MenController@index');
Route::get('WomensProduct', 'Shop\WomenController@index');
Route::get('Single/{id}', 'Shop\SingleProductShop@openProduct');




Route::group([
'middleware' => 'auth'
], function() {
Route::get('payment-status',array('as'=>'payment.status','uses'=>'PaymentController@paymentInfo'));
Route::get('payment/{id}',array('as'=>'payment','uses'=>'PaymentController@payment'));
Route::get('payment-cancel', function () {
    return 'Payment has been canceled';
});

});


 
 
Route::get('/addProduct/{productId},{quantity}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');
 

// Route::post('/wishlist', 
//   ['as' => 'wishlist.store', 'uses' => 'WishlistController@store']);


// Route::post('/wishlist', 
//   ['as' => 'wishlist.destroy', 'uses' => 'WishlistController@destroy']);

// Route::resource('/wishlist', 'WishlistController', [ 'only' => ['store', 'destroy']]);

   // $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
   //      $this->post('login', 'Auth\LoginController@login');
   //      $this->post('logout', 'Auth\LoginController@logout')->name('logout');

   //      // Registration Routes...
   //      $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   //      $this->post('register', 'Auth\RegisterController@register');

   //      // Password Reset Routes...
   //      $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
   //      $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
   //      $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
   //      $this->post('password/reset', 'Auth\ResetPasswordController@reset');