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

Route::get('/', function () {return view('home');});
Route::get('/login', function () {return view('login');}) -> name('login');
Route::get('/register', function () {return view('register');}) -> name('register');
Route::get('/user', function () {return view('userprofile');}) -> name('userprofile') ;
Route::get('/discussion', function () {return view('discussion');}) -> name('discussion');
Route::get('/dashboard', function () {return view('dashboard');}) -> name('dashboard');
Route::get('/myquestion', function () {return view('myquestion');}) -> name('myquestion');
Route::get('/myanswer', function () {return view('myanswer');}) -> name('myanswer');