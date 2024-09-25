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


Route::get('/switch-language/{locale}', [App\Http\Controllers\HomeController::class, 'switchLanguage'])->name('switch-language');

Route::get('/what-to-see', [App\Http\Controllers\HomeController::class, 'what_to_see'])->name('what_to_see');
Route::get('/what-to-see/{id}', [App\Http\Controllers\HomeController::class, 'what_to_see_show'])->name('what_to_see.show');


Route::get('/about', function () {
    return view('frontend.about');
});
