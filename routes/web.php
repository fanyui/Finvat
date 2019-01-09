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

Auth::routes();

Route::get('/decrypt', 'HomeController@decryption');
Route::get('/getClient', 'HomeController@getClients');

Route::get('/', 'GeneralController@welcome');
Route::get('/register/success', 'GeneralController@registerSuccess');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/config', 'HomeController@configuration')->name('configuration');
Route::get('/profile', 'HomeController@profile')->name('profile');


Route::get('/account', 'HomeController@account')->name('account');
Route::get('/account/add', 'HomeController@addAccount')->name('account-add');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/regester/test', 'HomeController@regist')->name('registertest');


Route::get('/account/details/{id}', 'HomeController@accountDetails')->name('account-details');

Route::delete('/account/details/{id}', 'HomeController@deleteAccount')->name('account-delete');

// route for finantial position
Route::get('/financialstatus', 'HomeController@financialPosition')->name('financial-position');

//route for financtial plan
Route::get('/forecast', 'HomeController@financialPlan')->name('forecast');

//route for profile settings
Route::get('/profile', 'HomeController@profile')->name('profile');

// update password 
Route::post('/users/update', 'HomeController@updatePasword')->name('update-password');


//handle the result of the fitnance callback: this method seems to be protected by CSRF so it has been moved to the api routes to exclude it 
Route::post('/account/fitnance/{user}/callback', 'GeneralController@handleFitnanceCallback')->name('fitnance-callback');