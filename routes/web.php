<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () { 
    return view('welcome'); 
});

Route::get('/api/article/', [ArticleController::class, 'list']);
Route::post('/api/article/', [ArticleController::class, 'create']);
Route::get('/api/article/{id}', [ArticleController::class, 'getById']);
Route::post('/api/article/update/{id}', [ArticleController::class, 'update']);
Route::post('/api/article/delete/{id}', [ArticleController::class, 'delete']);