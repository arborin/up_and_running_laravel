<?php

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



// old: a7f77ef730b344a0780684ea1036dd92
// new:
