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
//     return view('welcome');
// });
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\ContactController;


Route::get('/', [HomeController::class, 'index'])->name('front.index');
Route::get('/about', [HomeController::class, 'about'])->name('front.about');
Route::get('/services', [HomeController::class, 'services'])->name('front.services');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('front.portfolio');
Route::get('/contact', [ContactController::class, 'contact'])->name('front.contact');

