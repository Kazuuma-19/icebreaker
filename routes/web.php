<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [TopicController::class, 'index']);
// Route::get('/show', [TopicController::class, 'show']);

// ログイン、ログアウト
Route::get('login', [AuthController::class, 'create']);
Route::post('login', [AuthController::class, 'store']);
Route::delete('logout', [AuthController::class, 'destroy']);

// 会員登録
Route::resource('register', UserController::class);