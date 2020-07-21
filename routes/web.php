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

Route::get('/', 'HomeController@homeview');
Route::get('/login', function () {return view('login');}) -> name('login');
//Route::get('/login2', function () {return view('login2');}) -> name('login');
//Route::get('/register2', function () {return view('register2');}) -> name('register');
Route::get('/register', function () {return view('register');}) -> name('register');
Route::get('/user', function () {return view('dashboards.userprofile');}) -> name('userprofile') ;

Route::post('/store_users', 'UsersController@store')->name('store_users');
Route::post('/login_users', 'UsersController@login_users')->name('login_users');

// Route::group(['middleware' => ['Auth']], function () {
    Route::get('/discussion', function () {return view('dashboards.discussion');}) -> name('discussion');
    Route::get('/dashboard', function () {return view('dashboards.dashboard');}) -> name('dashboard');
    Route::get('/myquestion', function () {return view('dashboards.myquestion');}) -> name('myquestion');
    Route::get('/myanswer', function () {return view('dashboards.myanswer');}) -> name('myanswer');
    
// });

// Route::group(['middleware' => 'LoginCheck'], function () {
    
//     Route::get('/discussion', function () {return view('dashboards.discussion');}) -> name('discussion');
//     Route::get('/dashboard', function () {return view('dashboards.dashboard');}) -> name('dashboard');
//     Route::get('/myquestion', function () {return view('dashboards.myquestion');}) -> name('myquestion');
//     Route::get('/myanswer', function () {return view('dashboards.myanswer');}) -> name('myanswer');
// });