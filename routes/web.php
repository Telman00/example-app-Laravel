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
use App\Http\Controllers\Front\BlogGridController;
use App\Http\Controllers\Front\SideBarController;
use App\Http\Controllers\Front\SingleController;

Route::get('/', [HomeController::class, 'index'])->name('front.index');
Route::get('/about', [HomeController::class, 'about'])->name('front.about');
Route::get('/services', [HomeController::class, 'services'])->name('front.services');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('front.portfolio');
Route::get('/contact', [ContactController::class, 'contact'])->name('front.contact');
Route::get('/bloggrid', [BlogGridController::class, 'bloggrid'])->name('front.bloggrid');
Route::get('/sidebar', [SideBarController::class, 'sidebar'])->name('front.sidebar');
Route::get('/single', [SingleController::class,'single'])->name('front.single');
