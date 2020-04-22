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

Route::get('/', 'MotorBikesController@index')->name('frontend');

Auth::routes();

Route::get('/register', function () {
    abort('404');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bikes', 'BikesController@index')->name('bike.index')->middleware('auth');
Route::get('/bikes/new', 'BikesController@form')->name('bike.new')->middleware('auth');
Route::get('/bikes/{bike}', 'BikesController@form')->name('bike.form')->middleware('auth');
Route::post('/bikes/save', 'BikesController@post')->name('bike.save')->middleware('auth');
Route::post('/bikes/{bike}/delete', 'BikesController@delete')->name('bike.delete')->middleware('auth');

Route::get('/categories', 'CategoriesController@index')->name('category.index')->middleware('auth');
Route::get('/categories/new', 'CategoriesController@form')->name('category.new')->middleware('auth');
Route::get('/categories/{category}', 'CategoriesController@form')->name('category.form')->middleware('auth');
Route::post('/categories/save', 'CategoriesController@post')->name('category.save')->middleware('auth');
Route::post('/categories/{category}/delete', 'CategoriesController@delete')->name('category.delete')->middleware('auth');
