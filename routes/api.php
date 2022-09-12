<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')
    ->prefix('apartments')
    ->group(function(){

    // GET CALLS
    Route::get('/', 'PageController@getApartments');

    Route::get('/services', 'PageController@getServices');

    Route::get('/apartment-details/{id}', 'PageController@show');

    Route::get('/see-messages/{apartmentID}', 'PageController@getMessages');

    Route::get('/sponsor-expiry-time', 'PageController@checkSponsorExpiryTime');

    Route::get('/filteredApartments/{rooms}/{beds}/{distance}/{lat}/{lon}/{servicesList}/{sponsored}', 'PageController@apartmentsWithFilters');

    Route::get('/sponsored', 'PageController@sponsoredApartments');

    Route::get('/get-apartment-views/{id}', 'PageController@getApartmentViews');

    Route::get('/get-all-views', 'PageController@getAllViews');

    // POST CALLS
    Route::post('/send-message', 'PageController@sendMessage');

    Route::post('/add-view', 'PageController@addView');

    Route::post('/send-position', 'PageController@sendPosition');
});
