<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', [HomeController::class, 'index']);

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/seeupdate', 'App\Http\Controllers\HomeController@showdata');

//admin 
Route::get('/admindashboard', 'App\Http\Controllers\AdminController@index');
Route::post('/add', 'App\Http\Controllers\AdminController@add');
Route::get('/edit/{id}', 'App\Http\Controllers\AdminController@edit');
Route::get('/delete/{id}', 'App\Http\Controllers\AdminController@delete');
Route::post('/update', 'App\Http\Controllers\AdminController@update');
Route::get('/addnew', 'App\Http\Controllers\AdminController@addnew');

//Admin login
Route::get('/adminlogin','App\Http\Controllers\AdminController@login');
Route::post('/admincheck','App\Http\Controllers\AdminController@admincheck');





