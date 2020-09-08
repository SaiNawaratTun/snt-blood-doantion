<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::resource('form', 'FormController');
Route::resource('feedback', 'FeedbackController');
Route::resource('food','FoodController');
Route::resource('item', 'ItemController');
Route::resource('volunteer', 'VolunteerController');

Route::get('/a', function () {
    return view('forms.viewA');
});
Route::get('/b', function () {
    return view('forms.viewB');
});
Route::get('/o', function () {
    return view('forms.viewO');
});
Route::get('/ab', function () {
    return view('forms.viewAB');
});

Route::get('/about', function () {
    return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
