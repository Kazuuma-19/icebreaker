<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
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
// トップページを表示
Route::get('/', [IndexController::class, 'index'])
  ->name('top');
// お題を取得
Route::get('top', [IndexController::class, 'getAllTopics'])
  ->name('allTopics');
// ユーザーのお題のみ取得
Route::get('user-top', [IndexController::class, 'getUserTopics'])
  ->name('userTopics');

// お題管理ページ
Route::get('topics', [TopicController::class, 'index'])
  ->name('topics.index');
Route::resource('topics', TopicController::class);

// ログイン、ログアウト
Route::get('login', [AuthController::class, 'index'])
  ->name('login.index');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

// 会員登録
Route::get('register', [UserController::class, 'index'])
  ->name('register.index');
Route::resource('register', UserController::class);