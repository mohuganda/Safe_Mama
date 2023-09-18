<?php

use App\Http\Controllers\Api\ForumsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PublicationsApiController;

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

// Publications Routes

Route::group(["prefix" =>"publications"],function(){

   
    Route::resource('/', PublicationsApiController::class);
    Route::get('/categories', [PublicationsApiController::class,'categories']);
    Route::get('/categories/{id}', [PublicationsApiController::class,'category_publications']);
    Route::get('/{id}', [PublicationsApiController::class,"show"]);
    Route::get('/filetypes', [PublicationsApiController::class,"file_types"]);

});


Route::group(["prefix" =>"forums"],function(){

    Route::get('/', [ForumsApiController::class,'index']);
    Route::post('/join', [ForumsApiController::class,'join']);
    Route::post('/comment', [ForumsApiController::class,'comment']);

});

