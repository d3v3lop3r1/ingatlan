<?php

use Illuminate\Support\Facades\Route;

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
    return view('nemsokara');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout','HomeController@logout');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/show', 'PagesController@show');
Route::get('/home', 'PagesController@home');
Route::get('/index/{property}', 'PagesController@index');
Route::get('/lakasok', 'PagesController@showLakasok');
Route::get('/hazak', 'PagesController@showHazak');
Route::get('/irodak', 'PagesController@showIrodak');
Route::get('/ipari', 'PagesController@showIpari');
Route::get('/nyaralok', 'PagesController@showNyaralok');
Route::get('/garazsok', 'PagesController@showGarazsok');
Route::get('/raktarak', 'PagesController@showRaktarak');


Route::group(['middleware'=>'auth'],function(){
    Route::resource('/properties', 'PropertyController');
    Route::resource('/agents', 'AgentController');
    Route::resource('/clients', 'ClientController');
    Route::resource('/photos', 'photoController');
    Route::get('/clients/get/{id}', 'AgentController@getClient');
    Route::get('/photos/create/{id}', 'photoController@create');
});


Route::get('/properties/lista', 'PropertyController@lista');
