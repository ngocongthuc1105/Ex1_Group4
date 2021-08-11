<?php

use App\Http\Controllers\AdminController;
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
Route::get('/', 'HomeController@home');
Route::get('/Home', 'HomeController@home');
Route::get('/show_category', 'HomeController@all_catalog');
Route::get('/our-team', 'HomeController@ourteam');
Route::get('/contact-us', 'HomeController@contactus');
//Danh muc sach
Route::get('/danh-muc-sach/{category_id}','CategoryBook@show_category');

//backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

//backend
Route::get('/loginpage', 'UserController@index')->name('loginpage');
Route::post('/user-login', 'UserController@login')->name('login');
Route::get('/registerpage', 'UserController@registerpage')->name('registerpage');
Route::post('/user-register','UserController@register')->name('register');
Route::post('/user-logout','UserController@logout')->name('logout');

//category stories
Route::get('/add-stories','CategoryStories@add_stories');
Route::get('/all-stories','CategoryStories@all_stories');
Route::get('/edit-stories/{ma_sach}','CategoryStories@edit_stories');
Route::get('/delete-stories/{ma_sach}','CategoryStories@delete_stories');
// review
Route::get('/show_review/{ma_sach}','CategoryStories@show_review');

Route::post('/save-stories','CategoryStories@save_stories');
Route::post('/update-stories/{ma_sach}','CategoryStories@update_stories');

//user
Route::get('/add-user','UserManagement@add_user');
Route::get('/all-user','UserManagement@all_user');
Route::get('/edit-user/{user_id}','UserManagement@edit_user');
Route::get('/delete-user/{user_id}','UserManagement@delete_user');

Route::post('/save-user','UserManagement@save_user');
Route::post('/update-user/{user_id}','UserManagement@update_user');

//List Borrower
Route::get('/add-list','ListBorrower@add_list');
Route::get('/all-list','ListBorrower@all_list');
Route::get('/edit-list/{ma_muon}','ListBorrower@edit_list');
Route::get('/delete-list/{ma_muon}','ListBorrower@delete_list');

Route::post('/save-list','ListBorrower@save_list');
Route::post('/update-list/{ma_muon}','ListBorrower@update_list');

//Finding books
Route::get("/search",'HomeController@getSearch');
Route::get("/admin/search", 'AdminController@getSearch');
Route::get("/admin/find-borrower", 'AdminController@getBorrower');

//Category book
Route::get('/add-category-book','CategoryBook@add_category_book');
Route::get('/all-category-book','CategoryBook@all_category_book');
Route::get('/edit-category-book/{category_id}','CategoryBook@edit_category_book');
Route::get('/delete-category-book/{category_id}','CategoryBook@delete_category_book');

Route::post('/save-category-book','CategoryBook@save_category_book');
Route::post('/update-category-book/{category_id}','CategoryBook@update_category_book');