<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;
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

Route::get('/login', [ViewController::class,'index'])->name('login');
Route::get('/page-summary',[ViewController::class,'pagesummary'])->name('page_summary');
Route::get('/add-page', [ViewController::class,'addpage'])->name('add_page');
Route::get('/category-summary',[ViewController::class,'categorysummary'])->name('category_summary');
Route::get('/add-category', [ViewController::class,'addcategory'])->name('add_category');
Route::get('/product-summary', [ViewController::class,'productsummary'])->name('product_summary');
Route::get('/add-product', [ViewController::class,'productadd'])->name('product_add');
Route::get('/change-password',[ViewController::class,'changepassword'])->name('change_password');

Route::post('/postLogin',[AuthController::class,'postLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');