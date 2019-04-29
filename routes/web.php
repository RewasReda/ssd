<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/control', 'PagesController@admincontrol');

Route::get('/bedeveloper', 'pagescontroller@bedeveloper');
Route::get('/bedeveloper', 'pagescontroller@devv');
Route::get('/bedeveloperpage', 'pagescontroller@bedeveloperpage');



Auth::routes();
Route::get('/contact', 'ContactFormController@create');
Route::post('/contact', 'ContactFormController@store');

Route::resource('/manageaccounts' , 'UsersController');
Route::resource('/managegames' , 'ManageGamesController');

Route::POST('review/store','ReviewController@store');

Route::resource('/games' , 'GamesController');
// Route::resource('/managegames' , 'GamesController@managgames');

Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::get('form',function(){
    return view('form');
});



Route::post('addToCart','GamesController@add_to_cart');