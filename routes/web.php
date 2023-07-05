<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WelcomeController;

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
Route::get('/master1', function () {
    return view('admin.layouts.master1');
});
Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');

Route::get('/about',[WelcomeController::class,'about'])->name('welcome.about');
Route::get('/home',[WelcomeController::class,'home'])->name('welcome.home');
Route::get('/contact',[WelcomeController::class,'contact'])->name('welcome.contact');
Route::post('/store5',[WelcomeController::class,'store5'])->name('welcome.store5');
Route::get('/shop',[WelcomeController::class,'shop'])->name('welcome.shop');
Route::get('/welcome/index2',[WelcomeController::class,'index2'])->name('welcome.index');


Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/create', function () {
    return view('admin.category.create');
});

Route::get('/products/create', function () {
    return view('admin.products.create');
});
//category
Route::get('/create',[CategoryController::class,'create'])->name('category.create');
Route::post('store',[CategoryController::class,'store'])->name('store');
Route::get('index',[CategoryController::class,'index'])->name('admin.category.index');
Route::get('edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

//products
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/store1',[ProductController::class,'products_store'])->name('store1');
Route::get('/products/index',[ProductController::class,'index'])->name('admin.products.index');
Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::post('/products/update/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('/products/delete/{id}',[ProductController::class,'delete'])->name('products.delete');

//cms
Route::get('/cms/create', function () {
    return view('admin.cms.create');
});
Route::get('/cms/create',[CmsController::class,'create'])->name('admin.cms.create');
Route::post('/store2',[CmsController::class,'store2'])->name('store2');
Route::get('/cms/index',[CmsController::class,'index'])->name('admin.cms.index');
Route::get('/cms/edit/{id}',[CmsController::class,'edit'])->name('cms.edit');
Route::post('/cms/update/{id}',[CmsController::class,'update'])->name('cms.update');
Route::get('/cms/delete/{id}',[CmsController::class,'delete'])->name('cms.delete');

//color
Route::get('/color/create', function () {
    return view('admin.color.create');
});
Route::get('/color/create',[ColorController::class,'create'])->name('admin.color.create');
Route::post('/store3',[ColorController::class,'store3'])->name('store3');
Route::get('/color/index',[ColorController::class,'index'])->name('admin.color.index');
Route::get('/color/edit/{id}',[ColorController::class,'edit'])->name('color.edit');
Route::post('/color/update/{id}',[ColorController::class,'update'])->name('color.update');
Route::get('/color/delete/{id}',[ColorController::class,'delete'])->name('color.delete');

//brand
Route::get('/brand/create',[BrandController::class,'create'])->name('admin.brand.create');
Route::post('/store4',[BrandController::class,'store4'])->name('store4');
Route::get('/brand/index',[BrandController::class,'index'])->name('admin.brand.index');
Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
Route::post('/brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');


//Orders
Route::get('/orders/index',[OrderController::class,'index'])->name('admin.orders.index');
//Review
Route::get('/review/index',[ReviewController::class,'index'])->name('admin.review.index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
