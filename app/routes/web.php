<?php

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




// ROUTE VERBS
/*
Route::get
Route::post
Route::put
Route::delete
Route::any
Route::match(['get','post'])
*/


// PASS PARAMETERS TO ROUTE
/*
Route::get("task/{id}", function($id){
    return $id;
})

Route::get("task/{id?}, function($id=null){
    return $id;
})

Route::get("task/{id?}, function($id=null){
    return $id;
})->where('id', '[0-9]+');

*/


// ROUTE NAMES
// Route::get('/post/{id}')->name("show.post");

// a href route('show.post',['id' => 14])

// ROUTE NAME CONVENTIONS
// example: resourceName.action
// photos.index, photos.create


// PASSING PARAMETERS TO route HELPER
// route('users.comments.show', [1, 2])
// route('users.comments.show', ['userId' => 2, 'commentId' => 200])
// route('users.comments.show', ['commentId' => 200, 'userId' => 2])
// route('users.comments.show', ['commentId' => 200, 'userId' => 2, 'opt' => 'query string'])


// ROUTE GROUPS
/*
Route::group(function(){
    Route::get('/hello', function(){
        return "hello";
    })

    ...
    ...
})

*/


// MIDDLEWARE
/*
Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return "Dashboard!";
    });
});
*/

// apply middlware in controller __constructor
// $this->middleware('auth');
// this->middleware('auth-admin')->only('editUsers');
// this->middleware('team-member')->except('editUsers');


// RATE LIMITING
// Route::middleware('auth:api', 'throttle:60,1')->group(function(){
//     Route::get('/profile', function(){
//         return "profile";
//     });
// });


// PATH PREFIX
// Route::prefix('dashboard')->group(function(){
//     Route::get("info", function(){
//         return "Dashboard info page";
//     });
// });


// FALLBACK ROUTES
// Use for catch unmatched routes
// Route::fallback(function () {
//     return "Any Route!";
// });


// SUBDOMAIN ROUTING
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });


// NAMESPACE ROUTES
// Route::namespace('Dashboard')->group(function(){
        // App\Http\Controllers\Dashboard\PurchasesController
//      Route::get('dashboard/purchases', [PurchasesController::class, 'index']);
// });


// PREFIXES
// Route::name('users.')->prefix('users')->group(function(){
//     Route::name('comments.')->prefix('comments')->group(function(){
//         Route::get('{id}', function($id){
//             return dd($id);
//         })->name('show');
//     });
// });


// SIGNED ROUTES
// USED FOR GENERATE TEMP LINKS
