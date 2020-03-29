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


//Route::get('/home', 'PagesController@show');

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/jo-tudni', function () {
    return view('info.jo-tudni');
});
Route::get('/vevoknek-berloknek', function () {
    return view('info.vevoknek-berloknek');
});

Route::get('/logout','HomeController@logout');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/show', 'PagesController@showing');
Route::get('/home', 'PagesController@home');
Route::any('/search', 'PagesController@search');
Route::get('/index/{property}', 'PagesController@index');

Route::get('/osszes-elado-ingatlan', 'PagesController@eladoOsszes');
Route::get('/elado-lakasok', 'PagesController@eladoLakasok');
Route::get('/elado-hazak', 'PagesController@eladoHazak');
Route::get('/elado-irodak', 'PagesController@eladoIrodak');
Route::get('/elado-ipari', 'PagesController@eladoIpari');
Route::get('/elado-nyaralok', 'PagesController@eladoNyaralok');
Route::get('/elado-garazsok', 'PagesController@eladoGarazsok');
Route::get('/elado-raktarak', 'PagesController@eladoRaktarak');
Route::get('/elado-uzlethelyisegek', 'PagesController@eladoUzlethelyisegek');
Route::get('/elado-vendeglatas', 'PagesController@eladoVendeglatas');
Route::get('/elado-telek-fold', 'PagesController@eladoTelekfold');
Route::get('/elado-egyeb', 'PagesController@eladoEgyeb');

Route::get('/osszes-kiado-ingatlan', 'PagesController@kiadoOsszes');
Route::get('/kiado-lakasok', 'PagesController@kiadoLakasok');
Route::get('/kiado-hazak', 'PagesController@kiadoHazak');
Route::get('/kiado-irodak', 'PagesController@kiadoIrodak');
Route::get('/kiado-ipari', 'PagesController@kiadoIpari');
Route::get('/kiado-nyaralok', 'PagesController@kiadoNyaralok');
Route::get('/kiado-garazsok', 'PagesController@kiadoGarazsok');
Route::get('/kiado-raktarak', 'PagesController@kiadoRaktarak');
Route::get('/kiado-uzlethelyisegek', 'PagesController@kiadoUzlethelyisegek');
Route::get('/kiado-vendeglatas', 'PagesController@kiadoVendeglatas');
Route::get('/kiado-telek-fold', 'PagesController@kiadoTelekfold');
Route::get('/kiado-egyeb', 'PagesController@kiadoEgyeb');


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

