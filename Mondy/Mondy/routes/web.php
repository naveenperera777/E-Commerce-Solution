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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home'); 
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
// Route::get( '/dashboard', 'HomeController@dashboard' )->name( 'dashboard' );


/**Administrator Controller */

Route::get('/admin/actions', 'AdminController@actions')->name('admin-actions'); 
Route::get('/admin/reports', 'AdminController@getReports')->name('admin-get-reports');  
#Add a new item
Route::get('/admin/add-new-product', 'AdminController@addProduct')->name('admin-add-new-product'); 
Route::post('/admin/add-new-product', 'AdminController@storeProduct')->name('admin-add-new-product'); 

/**Customer COntroller */

#view Item
Route::get('/customer/view-product/{id}', 'ProductController@viewProduct')->name('customer-view-product'); 
