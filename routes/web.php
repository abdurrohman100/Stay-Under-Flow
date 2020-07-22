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
Route::get('/login', function () {
    if(Session::get('login')){
        return redirect('dashboard');
    }
    return view('login');
})-> name('login');
Route::get('/register', function () {
    if(Session::get('login')){
        return redirect('dashboard');
    }
    return view('register');
})-> name('register');

Route::post('/store_users', 'UsersController@store')->name('store_users');
Route::post('/login_users', 'UsersController@login_users')->name('login_users');
Route::post('/logout/{id}', 'UsersController@logout')->name('logout');


Route::group(['middleware' => 'LoginCheck'], function () {
    Route::get('/user/{id}','UsersController@createListOwnProfile');
    Route::get('/discussion', function () {return view('dashboards.discussion');}) -> name('discussion');
    Route::get('/dashboard', function () {return view('dashboards.dashboard');}) -> name('dashboard');
    Route::get('/myquestion', 'DiscussController@createList') -> name('myquestion');
    Route::get('/myanswer', function () {return view('dashboards.myanswer');}) -> name('myanswer');
    Route::get('/create-discussion', function () {return view('dashboards.create-discussion');});
    Route::post('/create-discussion', 'DiscussController@createDiscussion') -> name('create-discussion');
});