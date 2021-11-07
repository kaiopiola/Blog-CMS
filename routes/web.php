<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Auth;
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


# Base Routes
Auth::routes();
Route::get('/sitemap.xml', [SitemapController::class, 'generate']);

# Web Routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{url}', [BlogController::class, 'show'])->name('post');

# Test Routes
Route::get('/preview/{view}', [App\Http\Controllers\PreviewController::class, 'render'])->name('preview');


