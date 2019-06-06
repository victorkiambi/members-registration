<?php

use Illuminate\Http\Request;
use App\Members;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('members', function() {
  
//     return Member::all();
// });

// Route::get('members/{contact}', function($contact) {
//     return $contact;
//     return Members::find($contact);
// });

// Route::post('members', function(Request $request) {
//     return Members::create($request->all);
// });

// Route::put('members/{contact}', function(Request $request, $contact) {
//     $article = Members::findOrFail($contact);
//     $article->update($request->all());

//     return $article;
// });

// Route::delete('members/{contact}', function($contact) {
//     Members::find($contact)->delete();

//     return 204;
// });

Route::get('members', 'MembersController@index');
Route::get('members/{members}', 'MembersController@show');
Route::post('members', 'MembersController@store');
Route::put('members/{members}', 'MembersController@update');
Route::delete('members/{members}', 'MembersController@delete');