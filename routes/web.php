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

Route::get('/', 'ViewController@home')->name('landing');
Route::get('/search', 'ViewController@index')->name('search');
Route::get('/searchItem', 'ViewController@indexItem')->name('item');
Route::get('/users/landingUser', 'UserController@home')->name('landingUser');
Route::get('/home', 'ViewController@index')->name('home');
Route::get('/saveditems/items', 'SaveditemController@index')->name('saved');
Route::get('/saveditems/wishlist', 'SaveditemController@wishList')->name('whislist');
Route::delete('/saveditems/{id}', 'SaveditemController@destroy')->name('itemdestroy');
// Route::post('/saveditems/items', 'SaveditemController@store')->name('saveditems');

Route::resource('products','ViewController');
Route::resource('users','UserController');
Route::resource('saveditems','SaveditemController');
Route::resource('cart','CartController');

Route::get('pay-with-paypal','CheckoutController@paywithPaypal')->name('payment.paypal');
Route::get('payment-done','CheckoutController@paymentDone')->name('payment.done');

Auth::routes();



