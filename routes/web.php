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

Route::get('/main', function () {
    return view('pages.home');
});

//Route::get('/home', 'PagesController@show');

Route::get('/demo', function () {
    return view('demo');
});
Route::get('/logout','HomeController@logout');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/show', 'PagesController@showing');
Route::get('/home', 'PagesController@home');
Route::post('/search', 'PagesController@search');
Route::get('/index/{property}', 'PagesController@index');
Route::get('/lakasok', 'PagesController@showLakasok');
Route::get('/hazak', 'PagesController@showHazak');
Route::get('/irodak', 'PagesController@showIrodak');
Route::get('/ipari', 'PagesController@showIpari');
Route::get('/nyaralok', 'PagesController@showNyaralok');
Route::get('/garazsok', 'PagesController@showGarazsok');
Route::get('/raktarak', 'PagesController@showRaktarak');
Route::get('/uzlethelyisegek', 'PagesController@showUzlethelyisegek');
Route::get('/vendeglatas', 'PagesController@showVendeglatas');
Route::get('/telekfold', 'PagesController@showTelekfold');
Route::get('/egyeb', 'PagesController@showEgyeb');


Route::group(['middleware'=>'auth'],function(){
    Route::resource('/properties', 'PropertyController');
    Route::resource('/agents', 'AgentController');
    Route::resource('/clients', 'ClientController');
    Route::resource('/photos', 'photoController');
    Route::get('/photos/agents/create/{id}', 'photoController@createAgentPhoto');
    Route::patch('/photos/agents/update', 'photoController@updateAgentPhoto');
    Route::get('/clients/get/{id}', 'AgentController@getClient');
    Route::get('/photos/create/{id}', 'photoController@create');
});


Route::get('/properties/lista', 'PropertyController@lista');

Auth::routes();

