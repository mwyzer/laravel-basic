<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Contact\ContactController;

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

// Route::get('/about', [AboutController::class, 'Index']);
// Route::get('/about', function () {
//     // echo "this is about page";
//     return view('about');
// });

// Route::get('/contact', [ContactController::class, 'Index']);
// Route::get('/contact', function () {
//     // echo "this is contact page";
//     return view('contact');
// });

Route::controller(DemoController::class)->group(function () {
// Route::get('/contact', [ContactController::class, 'Index']);
Route::get('/contact', 'ContactMethod')->name('contact.page');
Route::get('/about', [AboutController::class, 'Index'])->name('about.page');
// Route::get('/about', 'Index')->name('about.page');
});
