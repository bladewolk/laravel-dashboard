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

Auth::routes();

Route::get('/', function () {
    return redirect('login');
});

Route::middleware('auth')->namespace('Dashboard')->prefix('dashboard')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/charts', 'ChartController@index')->name('charts');
    Route::get('/tables', 'TablesController@index')->name('tables');

    Route::get('/components/{view}', 'ComponentsController@index')->name('components');

    Route::get('{first}/{second?}/{third?}', function () {
        return redirect('/Dashboard');
    });
});
