<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;

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

Route::get('/', [HomeController::class ,'index']);
Route::get('/post/{id}', 'HomeController@show')->name('post.show');
Route::get('/create/post', 'HomeController@create')->name('post.create');
Route::post('/add/post', 'HomeController@store')->name('post.store');
Route::get('/edit/post/{slug}', 'HomeController@edit')->name('post.edit');
Route::put('/update/post/{slug}', 'HomeController@update')->name('post.update');
Route::delete('/delete/post/{slug}', 'HomeController@delete')->name('post.delete');
