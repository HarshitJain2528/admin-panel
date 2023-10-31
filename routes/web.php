<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// View Routes

// Display the login view
Route::get('/', [ViewController::class,'index'])->name('login');

// Display the page summary view
Route::get('/page-summary', [ViewController::class,'pageSummary'])->name('page_summary');

// Display the add page view
Route::get('/add-page', [ViewController::class,'addPage'])->name('add_page');

// Display the category summary view
Route::get('/category-summary', [ViewController::class,'categorySummary'])->name('category_summary');

// Display the add category view
Route::get('/add-category', [ViewController::class,'addCategory'])->name('add_category');

// Display the product summary view
Route::get('/product-summary', [ViewController::class,'productSummary'])->name('product_summary');

// Display the add product view
Route::get('/add-product', [ViewController::class,'productAdd'])->name('product_add');

// Display the change password view
Route::get('/change-password', [ViewController::class,'changePassword'])->name('change_password');

// Authentication Routes

// Handle user login
Route::post('/postLogin', [AuthController::class,'postLogin'])->name('login.post');

// Handle user logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Page Routes

// Insert or update page data
Route::post('/insert-page', [AdminController::class,'insertPage'])->name('insert.page');

// Delete page data
Route::get('delete-data/{id}', [AdminController::class,'deletePageData']);

// Display the edit page form
Route::get('edit-data/{id}', [AdminController::class,'editPageDisplay']);

// Search for pages based on a search term
Route::post('/page-summary', [AdminController::class,'searchPage'])->name('search.page');

// Category Routes

// Insert or update category data
Route::post('/insert-category', [AdminController::class,'insertCategory'])->name('insert.category');

// Delete category data
Route::get('delete-data-category/{id}', [AdminController::class,'deleteCategoryData']);

// Display the edit category form
Route::get('edit-data-category/{id}', [AdminController::class,'editCategoryDisplay']);

// Search for categories based on a search term
Route::post('/category-summary', [AdminController::class,'searchCategory'])->name('search.category');

// Product Routes

// Insert a new product with image upload
Route::post('/insert-product', [AdminController::class,'insertProduct'])->name('insert.product');

// Delete product data
Route::get('delete-data-product/{id}', [AdminController::class,'deleteProductData']);

// Display the edit product form
Route::get('edit-data-product/{id}', [AdminController::class,'editProductData']);

// Edit a product's data
Route::post('edit-product/{id}', [AdminController::class,'editProduct']);

// Search for products based on a search term
Route::post('/product-summary', [AdminController::class,'searchProduct'])->name('search.product');

// Change Password Route

// Change the user's password
Route::post('changepassword', [AdminController::class,'changePassword']);
