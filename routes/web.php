<?php

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/travelers', [App\Http\Controllers\HomeController::class, 'travelers'])->name('travelers');

Route::get('/about', function () {
    return view('frontend.about');
});


Route::get('/what-to-see', function () {
    return view('frontend.what_to_see');
});
