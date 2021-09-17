<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\UserMainController;

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

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'App\Http\Controllers\UserMainController@logout');
    Route::get('getUserInfoProfile', 'App\Http\Controllers\UserMainController@getUserInfoProfile');
    Route::post('createTranning', 'App\Http\Controllers\TranningController@createTranning');
    Route::post('updateAvatar', 'App\Http\Controllers\UserMainController@updateAvatar');
    Route::post('updateUserInfo', 'App\Http\Controllers\UserMainController@updateUserInfo');
    Route::post('createUserInvite', 'App\Http\Controllers\UserMainController@createUserInvite');
    Route::post('acceptInvite', 'App\Http\Controllers\UserMainController@acceptInvite');
    Route::post('closeTranning', 'App\Http\Controllers\TranningController@closeTranning');
    Route::get('getTranning', 'App\Http\Controllers\TranningController@getTranning');
    Route::get('getTranning', 'App\Http\Controllers\TranningController@getTranning');
    Route::post('createMessageChat', 'App\Http\Controllers\TranningController@createMessageChat');
    Route::get('getMessageChat', 'App\Http\Controllers\TranningController@getMessageChat');
    Route::post('deleteMessageChat', 'App\Http\Controllers\TranningController@deleteMessageChat');
    Route::post('createUserResponse', 'App\Http\Controllers\TranningController@createUserResponse');
    Route::get('getAllResponseUser', 'App\Http\Controllers\TranningController@getAllResponseUser');
    Route::post('changeStatusRequest', 'App\Http\Controllers\TranningController@changeStatusRequest');
    Route::post('createUserSession', 'App\Http\Controllers\TranningController@createUserSession');
    Route::get('getAllTrannings', 'App\Http\Controllers\TranningController@getAllTrannings');
    Route::get('getAllUserTrannings', 'App\Http\Controllers\TranningController@getAllUserTrannings');
    Route::get('getTranningById', 'App\Http\Controllers\TranningController@getTranningById');
});

Route::post('authByPassword', 'App\Http\Controllers\UserMainController@authByPassword');
Route::post('signUp', 'App\Http\Controllers\UserMainController@signUp');
