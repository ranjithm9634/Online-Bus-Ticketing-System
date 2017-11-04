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

Route::get('/profile', function(){
	return view('profile/view');
});

Route::get('/profile/edit', 'Controller@edit');

Route::post('/profile/saved', 'Controller@saved');

Route::post('/display/search', 'BusController@search');

Route::get('/buses', 'BusController@index');

Route::get('display/ticket/{id}', 'BusController@view');

Route::post('/ticket/booked/{id}', 'TicketController@book');

Route::get('/ticket/all', 'TicketController@all');

Route::get('ticket/view/{id}', 'TicketController@view');

Route::get('ticket/cancel/{id}', 'TicketController@cancel');

Route::get('ticket/cancelled/{id}', 'TicketController@cancelled');

Route::get('/suggest', 'Controller@suggest');

Route::post('/suggested', 'Controller@suggested');