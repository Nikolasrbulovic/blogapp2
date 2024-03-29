<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Models\post;
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

Route::post('/create', [PostController::class, 'store']);
Route::post('/createcomment', [CommentController::class, 'store']);

Route::get('/', [PostController::class, 'index']);
Route::get('/{id}', [PostController::class, 'show']);
