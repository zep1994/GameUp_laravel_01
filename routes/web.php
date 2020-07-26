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

Route::get('/', 'HomeController@index');

Route::resource('posts', 'PostsController');
Route::resource('games', 'GamesController');
Route::resource('coaches', 'CoachController');

Route::get('profile', 'UsersController@profile');
Route::post('profile', 'UsersController@update_avatar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/super_admin/', 'HomeController@index');
});