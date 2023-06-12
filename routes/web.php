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

// お題を取得
Route::get('topics', [TopicController::class, 'getTopics'])
  ->name('topics');
// ユーザーのお題のみ取得
Route::get('user-topics', [TopicController::class, 'getAllTopics'])
  ->name('userTopics');

// ログイン、ログアウト
Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

// 会員登録
Route::resource('register', UserController::class);