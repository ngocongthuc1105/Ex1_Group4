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
//frontend
Route::get('/', 'HomeController@index');
Route::get('/Home', 'HomeController@home');
Route::get('/catalog', 'HomeController@all_catalog');
Route::get('/our-team', 'HomeController@ourteam');
Route::get('/contact-us', 'HomeController@contactus');

//backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

//category stories
Route::get('/add-stories','CategoryStories@add_stories');
Route::get('/all-stories','CategoryStories@all_stories');
Route::post('/save-stories','CategoryStories@save_stories');