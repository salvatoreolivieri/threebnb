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

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/apartments/sponsorpush/{sponsorId}/{apartmentId}', 'ApartmentController@sponsoredPush' )->name('pushSponsor');
        Route::resource('apartments', 'ApartmentController');
    });

Route::get('{any?}', function(){
     return view('guests.home');
    })->where('any', '.*')->name('home');

