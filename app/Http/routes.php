<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact',"FriendController@getIndex");

Route::get('/ruwan', function () {
    return "test";
});



Route::get('/user/login', function () {
    return view('user.user');
});

//pass parameter trough URL's
Route::get('/user/{id}', function ($id) {
    return "User Id" . $id;
});


Route::get('/myfriends/{myuserid}/{is_close_friend}', function ($id,$is_close_friend) {
    return "My User Id-->" . $id . " Is close friend -->" . $is_close_friend;
});

//Defined Named Routs
//Route::get('/friend/profile', [
	//'as'=>'My Profile',
	//'uses'=>'FriendController@getIndex'

//]);
 