<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return "HELLO WORLD";
})->name('main.home');



Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', 'CreateController')->name('post.index');
    Route::get('/posts/store', 'CreateController')->name('post.store');
    Route::get('/about', 'CreateController')->name('about.index');
});

Route::get('/hello/{name}', function ($name) {
    echo $name;
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('news.index');
    Route::get('/create', [IndexController::class, 'create'])->name('news.create');
    Route::get('/edit/{id}', [IndexController::class, 'edit'])->name('news.edit');
});
//
// Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
// Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');

// Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');
// Route::get('/about', [AboutController::class, 'index'])->name('about.index');
