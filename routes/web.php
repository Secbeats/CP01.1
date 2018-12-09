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


Route::get('/', 'HomeController@index');
Route::get('/sign-up', 'HomeController@registration');
Route::post('/sign-up', 'HomeController@registration');
Route::get('/sign-up/confirm', 'HomeController@confirm');
Route::get('/account/user/verify', 'HomeController@verifyUser');
Route::get('/how-it-works', 'HomeController@howItWorks');
Route::get('/terms', 'HomeController@terms');

Route::prefix('admin')->group(function(){
    Route::get('/donators','AdminController@donators');
    Route::get('/donees','AdminController@donees');
    Route::get('/total-donation','AdminController@totalDonation');
    Route::get('/approve-donation','AdminController@approveDonation');
    Route::get('/withdrawal','AdminController@withdrawal');
});

Route::prefix('donator')->group(function(){
    Route::get('/account-credit','DonatorController@accountCredit');
    Route::post('/account-credit','DonatorController@accountCredit');
    Route::get('/transaction-history','DonatorController@transactionHistory');
    Route::get('/donation-requests','DonatorController@donationRequests');
    Route::get('/my-donees','DonatorController@myDonees');
    Route::get('/my-profile','DonatorController@myProfile');
    Route::post('/my-profile','DonatorController@myProfile');
});

Route::prefix('donee')->group(function(){
    Route::get('/request-donation','DoneeController@requestDonation');
    Route::post('/request-donation','DoneeController@requestDonation');
    Route::get('/transaction-history','DoneeController@transactionHistory');
    Route::get('/donators','DoneeController@donators');
    Route::get('/donation-requests','DoneeController@donationRequests');
    Route::get('/my-profile','DoneeController@myProfile');
    Route::post('/my-profile','DoneeController@myProfile');
});

Auth::routes();