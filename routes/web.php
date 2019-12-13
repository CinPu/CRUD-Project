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
Route::get("/home",function (){
    return view("welcome");
});
 /**
  * for auth
  */
Route::group(["namespace"=>"Auth"],function (){
    Route::get("/register","RegisterController@showRegistrationForm");
    Route::post("/register","RegisterController@register");
    Route::get("/login","LoginController@showLoginForm");
    Route::post("/login","LoginController@login");
    Route::get("/logout","LoginController@logout");
});
/**
 * for gallery
 */
Route::get("/show","gallery@index");
Route::get("/create","gallery@create");
Route::post("/create","gallery@store");
Route::get("/edit/{id}","gallery@edit");
Route::post("/edit/{id}","gallery@update");
Route::get("/delete/{id}","gallery@destroy");
