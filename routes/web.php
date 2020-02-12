<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('','HomeController@index');


Route::namespace('User')->group(function(){
    Route::resource('/customer', 'CustomerController')->names([
        'store' => 'customer.purchase',
    ]);
});
    




Route::resource('','ProductController');

// Route::namespace('Auth')->group(function(){
//     Route::get('/test/{id}/{username?}','RegsiterController@index');
// });

// Route::namespace('admin')->group(function(){
//     Route::prefix('/account')->group(function(){
//         Route::any('/email','HomeController@getEmail');
//     });
// });

// Route::prefix('/admin')->group(function(){
//     Route::any('/email','HomeController@getName')->middleware('checkSentMail');
// });

Auth::routes();

Route::resource('/home', 'ProductController');
