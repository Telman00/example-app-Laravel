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
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;


Route::get('/mega', [HomeController::class, 'mega'])->name('front.mega');


Route::get('/', [HomeController::class, 'index'])->name('front.index');
Route::get('/about', [HomeController::class, 'about'])->name('front.about');
Route::get('/pricing', [HomeController::class,'pricing'])->name('front.pricing');
Route::get('/services', [HomeController::class, 'services'])->name('front.services');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('front.portfolio');
Route::get('/contact', [ContactController::class, 'contact'])->name('front.contact');
Route::get('/bloggrid', [BlogGridController::class, 'bloggrid'])->name('front.bloggrid');
Route::get('/sidebar', [SideBarController::class, 'sidebar'])->name('front.sidebar');
Route::get('/single', [SingleController::class,'single'])->name('front.single');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('blog')->name('blog.')->group(function(){
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/create', [BlogController::class, 'store'])->name('store');
        // Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('edit');
        // Route::put('/edit/{blog}', [BlogController::class, 'update'])->name('update');
        // Route::delete('/delete/{blog}', [BlogController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [BlogController::class, 'editID'])->name('edit.id');
        Route::put('/edit/{blog}', [BlogController::class, 'updateID'])->name('update.id');
        Route::delete('/delete/{blog}', [BlogController::class, 'destroyID'])->name('delete.id');

    });

});

