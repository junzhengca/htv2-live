<?php

use Illuminate\Http\Request;

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

Route::get('/', function(Request $request){
    return "test";
});

Route::get('events', 'EventController@getAll');
Route::post('events', 'EventController@create')->middleware('auth.token');
Route::delete('events/{id}', 'EventController@delete')->middleware('auth.token');

Route::post('fcm/subscribe', 'FCMController@subscribe');

Route::post('announcements', 'AnnouncementController@create')->middleware('admin.auth');
Route::get('hashletter/{hash}', 'HashLetterController@get');