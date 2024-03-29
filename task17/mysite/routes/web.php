<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;

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
Route::get('/user', [TextController::class, 'listText']);
Route::get('/text', [TextController::class, 'listText']);

Route::post('/user', [TextController::class, 'postText']);
Route::post('/text', [TextController::class, 'postText']);

Route::put('/user', [TextController::class, 'updateText']);
Route::put('/text', [TextController::class, 'updateText']);

Route::delete('/user/{$id}', [TextController::class, 'deleteText']);
Route::delete('/text/{$id}', [TextController::class, 'deleteText']);
