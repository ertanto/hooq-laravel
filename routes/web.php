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

// Setup routing which corresponds with reactjs SPA routing
Route::group(['prefix' => 'movie'], function () {
    Route::get('{page}', function ()    {
        return view('welcome');
    })->where('page', '(list|detail)');
});
// Setup routing which corresponds with reactjs SPA routing
Route::get('/search/{query}', function () {
    return view('welcome');
})->where('query', '(.+)');
