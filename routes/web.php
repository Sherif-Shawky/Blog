<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['name' => 'sherif', 'age' => 20, 'books' => ['novel', 'stroy', 'comic']]);
});

Route::get('/hello1', [HelloController::class, 'helloAction']);
Route::get('/hello2', [HelloController::class, 'hello2Action']);
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
