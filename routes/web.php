<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/mypage', [MyController::class, 'index']);
Route::get('/post/create', [MyController::class, 'create']);
Route::get('/post/update', [MyController::class, 'update']);

Route::get('/hello/{name}', function ($name) {
    echo $name;
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('news.index');
    Route::get('/create', [IndexController::class, 'create'])->name('news.create');
    Route::get('/edit/{id}', [IndexController::class, 'edit'])->name('news.edit');
});
