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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bier/{bierNaam}', 'BierController@show');

Route::get('/bier', 'BierController@index');

Route::get('/gisting', 'GistingController@index');

Route::get('/gisting/{gisting}','GistingController@show');

Route::get('/gisting/{gisting}/biersoorten', 'GistingController@biersoorten');

Route::get('/bier/{bierNaam}/biersoort', 'BierController@biersoort');

Route::get('/biersoort/{biersoort}/biertjes', 'BierController@biertjes');

Route::get('/biersoort', 'BiersoortController@index');

Route::get('/biersoort/{biersoort}', 'BiersoortController@show');

Route::post('/bieren', 'BierController@store');

Route::get('/create', 'BierController@create');

Route::get('/update/{bierNaam}', 'BierController@edit');

Route::patch('/update/{bierNaam}', 'BierController@update');

Route::get('/delete/{bierNaam}', 'BierController@delete');





// Route::any('{query}', function() 
// { return redirect('/bier'); })->where('query', '.*');

