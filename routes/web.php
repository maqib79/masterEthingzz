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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'CustomController@index');
Route::get('category/{slug}', 'CustomController@category');
Route::get('/product/{slug}', 'CustomController@product');
Route::get('/quickview/{slug}', 'CustomController@quickview');
Route::get('/search/{searchKey}', 'CustomController@search');
Route::post('/addtocart', 'CustomController@addcart');
Route::get('/cart', 'CustomController@viewcart');
Route::get('/checkout', 'CustomController@checkout');
Route::get('/checkoutproceed', 'CustomController@checkoutproceed');
Route::get('/cartlist', 'CustomController@cartlist');
Route::post('/updatecart', 'CustomController@updatecart');
Route::post('/removecart', 'CustomController@removecart');
Route::get('/mycart', 'CustomController@mycart');







Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('/admin/product', 'ProductsController');
Route::resource('/admin/category', 'CategoriesController');
Route::resource('/admin/seopanel', 'WebPagesController');
Route::resource('/admin/blog', 'BlogController');
Route::resource('/admin/banner', 'BannerController');
Route::resource('/admin/urlredirect', 'UrlRedirectController');
Route::resource('/admin/productimg', 'ProductsImagesController');
Route::get('/admin/all', 'CategoriesController@index');
Route::get('/seos', function () {
    return view('demo');
});


Route::get('/autocomplete',  function () {
        return view('autosearch');
    });
Route::post('/autocomplete/fetch', 'CustomController@fetch')->name('autocomplete.fetch');

