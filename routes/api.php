<?php

use App\Http\Controllers\Api\Lara_Angu_Apis;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
| API Routes
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Here we will start our code || without authentication to make easy tutorial for beginners
Route::resource('books', BookController::class);


// Here i will make
Route::get('get-api-show', [Lara_Angu_Apis::Class , 'get_apis' ])->name('lara_api');
