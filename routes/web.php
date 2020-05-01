<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/demo', function (Request $request) {
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

// Route::get('/register', function () {
    //     return view('auth.register');
    // });

    //                  PageController

    Route::get('/show', 'PagesController@showing');
    Route::get('/home', 'PagesController@home');
    Route::any('/search', 'PagesController@search');
    Route::any('/search/view/{view} ', 'PagesController@view');
    Route::any('/save-favourite/{id} ', 'PagesController@saveFavourite');
    Route::any('/filter', 'PagesController@filter');

    Route::get('/index/{property}', 'PagesController@index');


    //                   ADMIN FELÜLET
    Route::group(['middleware'=>'auth'],function(){
        Route::resource('/properties', 'PropertyController');
        Route::resource('/agents', 'AgentController');
        Route::resource('/clients', 'ClientController');
        Route::resource('/photos', 'photoController');


        Route::patch('/photos/set-default/{id}', 'photoController@setDefault');
        Route::get('/photos/agents/create/{id}', 'photoController@createAgentPhoto');
        Route::patch('/photos/agents/update', 'photoController@updateAgentPhoto');
        Route::get('/clients/get/{id}', 'AgentController@getClient');
        Route::get('/photos/create/{id}', 'photoController@create');

        //                 MAINTENANCE
        Route::get('/maintenance','photoController@photoMaintenance');
    });

    Auth::routes();

    //                   NÉMET OLDALAK

Route::prefix('de')->group(function () {
    Route::get('/showing', function (Request $request) {
        return view('de_pages.show',compact('request'));
    });

        //              dePagesController

    Route::get('/show', 'dePagesController@showing');
    Route::get('/home', 'dePagesController@home');
    Route::any('/search', 'dePagesController@search');
    Route::any('/search/view/{view} ', 'dePagesController@view');
    Route::get('/index/{property}', 'dePagesController@index');
    Route::any('/filter', 'dePagesController@filter');

    //              deINFO OLDALAK

    Route::get('/wissenwertes', function () {
        return view('de_info.wissenwertes');
    });
    Route::get('/renovieren-umbauen', function () {
        return view('de_info.renovieren-umbauen');
    });
    Route::get('/fur-eigentumer', function () {
        return view('de_info.fur-eigentumer');
    });
    Route::get('/fur-kaufer-und-mieter', function () {
        return view('de_info.fur-kaufer-und-mieter');
    });


});
