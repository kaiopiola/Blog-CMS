<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

# Admin
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\PreviewController;

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


# Base Routes
Auth::routes();
Route::get('/sitemap.xml', [SitemapController::class, 'generate']);


# User Web Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home'); // Revisar essa rota depois
Route::get('/post/{url}', [BlogController::class, 'show'])->name('post');


# Admin Web Routes
Route::prefix('admin')->group(function(){
    Route::get('/', [AdminIndexController::class, 'index'])->name('admin.index');
    Route::get('/blog', [AdminBlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/novo', [AdminBlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog/novo', [AdminBlogController::class, 'store'])->name('admin.blog.store');

    Route::get('/blog/editar/{id}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');

    Route::get('/blog/preview/{id}', [AdminBlogController::class, 'show'])->name('admin.blog.show');

});


# Test Routes
Route::get('/preview/{view}', [PreviewController::class, 'render'])->name('preview');


