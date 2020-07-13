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
    return view('auth.login');
});

Auth::routes();
Route::group(
    ['middleware' => ['auth']],
    function () {

        Route::get('/home', 'HomeController@index')->name('home');

        /*Testimonials*/
        Route::get('/testimony', 'TestimonialsController@index')->name('testimony');
        Route::get('/testimony/create', 'TestimonialsController@create')->name('testimony.create');
        Route::post('/testimony/store', 'TestimonialsController@store')->name('testimony.store');
        Route::get('/testimony/{id}', 'TestimonialsController@show')->name('testimony.show');
        Route::get('/testimony/{id}/edit', 'TestimonialsController@edit')->name('testimony.edit');
        Route::put('/testimony/{id}', 'TestimonialsController@update')->name('testimony.update');
        Route::put('/testimony/{id}/remove', 'TestimonialsController@remove')->name('testimony.remove');
        Route::get('/export', 'TestimonialsController@export')->name('testimony.export');
    }
);
