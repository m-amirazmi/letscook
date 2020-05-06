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

// Front Pages
Route::get('/', 'FrontPagesController@landing');
Route::get('/recipes', 'FrontPagesController@index');
Route::get('/recipes/{id}', 'FrontPagesController@show');

// Admin Pages
Route::get('/admin', 'AdminController@index');

// Recipes Route
Route::resource('/admin/recipes', 'RecipesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
