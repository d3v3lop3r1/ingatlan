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


//                INFO OLDALAK

Route::get('/jo-tudni', function () {
    return view('info.jo-tudni');
});
Route::get('/tulajdonosoknak', function () {
    return view('info.tulajdonosoknak');
});
Route::get('/vevoknek-berloknek', function () {
    return view('info.vevoknek-berloknek');
});
Route::get('/ingatlanfox-a-gondnok', function () {
    return view('info.ingatlanfox-a-gondnok');
});
Route::get('/felujitasok-atepitesek-kivitelezese', function () {
    return view('info.felujitasok-atepitesek-kivitelezese');
});
Route::get('/koltozes-szervezese', function () {
    return view('info.koltozes-szervezese');
});


//                 ADMIN BELÉPÉS-KILÉPÉS

Route::get('/logout','HomeController@logout');

Route::get('/register', function () {
    return view('auth.register');
});

//                  PageController

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

//                     Menü LINKEK

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

//                   ADMIN FELÜLET
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

Auth::routes();

//                   NÉMET OLDALAK

Route::prefix('de')->group(function () {
    Route::get('home', function () {
        return view('de_pages.temp');
    });
    
    //              dePagesController

    Route::get('/show', 'dePagesController@showing');
    Route::get('/home', 'dePagesController@home');
    Route::any('/search', 'dePagesController@search');
    Route::get('/index/{property}', 'dePagesController@index');

    //              deINFO OLDALAK
    


});
