<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductController;
use App\Models\categories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// **************** Categories ********************//
Route::get('/categories',[CategoriesController::class,'categories'])->name('categories');
Route::get('/categories/save',[CategoriesController::class,'categories_save'])->name('categories-save');
Route::post('/categories/save/submit',[CategoriesController::class,'categories_save_submit'])->name('categories-save-submit');
Route::get('Category/View/{name}/{id}', [CategoriesController::class,'category_view'])->name('category_view');
Route::get('Category/Edit/{name}/{id}', [CategoriesController::class,'category_edit'])->name('category_edit');
Route::post('Category/Edit/Post/{name}/{id}', [CategoriesController::class,'category_edit_post'])->name('category_edit_post');
Route::get('Category/Delete/{name}/{id}', [CategoriesController::class,'category_delete'])->name('category_delete');
Route::post('Category/Delete/Post/{name}/{id}', [CategoriesController::class,'category_delete_post'])->name('category_delete_post');

// **************** Customers ********************//
Route::get('Customers', [CustomersController::class,'index'])->name("customers");
Route::get('Customers/Create', [CustomersController::class,'customer_create'])->name('customer_create');
Route::post('Customers/Create/post', [CustomersController::class,'customer_create_post'])->name('customer_create_post');
Route::get('Customers/View/{name}/{id}', [CustomersController::class,'customer_view'])->name('customer_view');
Route::get('Customers/Delete/{name}/{id}', [CustomersController::class,'customer_delete'])->name('customer_delete');
Route::post('Customers/Delete/Post/{name}/{id}', [CustomersController::class,'customer_delete_post'])->name('customer_delete_post');
Route::get('Customers/Edit/{name}/{id}', [CustomersController::class,'customer_edit'])->name('customer_edit');
Route::post('Customers/Edit/Post/{name}/{id}', [CustomersController::class,'customer_edit_post'])->name('customer_edit_post');

// ***************** Product ********************//
Route::get('Products', [ProductController::class,'index'])->name('products');
Route::get('Product/Create', [ProductController::class,'products_save'])->name('products_save');
Route::post('Product/Create/post', [ProductController::class,'products_save_submit'])->name('products_save_submit');
Route::get('Product/View/{name}/{id}', [ProductController::class,'products_view'])->name('products_view');
Route::get('Product/Edit/{name}/{id}', [ProductController::class,'products_edit'])->name('products_edit');
Route::post('Product/Edit/Post/{name}/{id}', [ProductController::class,'products_edit_post'])->name('products_edit_post');
Route::get('Product/Delete/{name}/{id}', [ProductController::class,'products_delete'])->name('products_delete');
Route::post('Product/Delete/Post/{name}/{id}', [ProductController::class,'products_delete_post'])->name('products_delete_post');




