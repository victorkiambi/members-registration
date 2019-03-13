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
    return view('./auth/login');
});

Route::get('/membertable', function () {
  
    $members = DB::table('members')->get();
    // return $members;

    return view('memberstable', ['members' => $members]);
});



Auth::routes();

// Route::get('/', 'LoginController@index')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/members', 'MembersController@index')->name('members');


//members

