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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('articles', 'App\Http\Controllers\Api\ArticleController');
Route::get('/selects', 'App\Http\Controllers\Api\ArticleController@querySelect');
Route::get('/specifics', 'App\Http\Controllers\Api\ArticleController@querySpecific');
Route::get('/paginations', 'App\Http\Controllers\Api\ArticleController@queryPagination');
Route::get('/ranges/{min},{max}', 'App\Http\Controllers\Api\ArticleController@queryRange');
Route::get('/bycgys/{cgy_id}', 'App\Http\Controllers\Api\ArticleController@queryByCgy');
Route::get('/plucks', 'App\Http\Controllers\Api\ArticleController@queryPluck');
Route::get('/counts', 'App\Http\Controllers\Api\ArticleController@enabledCount');