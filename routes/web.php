<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopSingleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', [IndexController::class, 'indexview']);
Route::get('/adminhome', [AdminController::class, 'adminhome'])->middleware(['auth', 'verified'])->name('adminhome');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/home',[IndexController::class ,'indexview'])->name('home');
Route::get('/shop',[ShopController::class ,'shopview'])->name('shop');
Route::get('/about',[AboutController::class ,'aboutview'])->name('about');
Route::get('/contact',[ContactController::class ,'Contactview'])->name('contact');
Route::post('/Contact',[ContactController::class ,'Contact'])->name('Contact');
Route::get('/cart',[CartController::class ,'cartview'])->name('cart');
Route::get('/shopsingle', [ShopSingleController::class, 'shopsingleview'])->name('shopsingle');
Route::post('/addProductsAdmin',[ProductController::class ,'addProduct'])->name('addproduct');
Route::put('/updateProduct/{id}',[ProductController::class ,'updateProduct'])->name('updateProduct');
Route::delete('/delete/{id}',[ProductController::class ,'destroy'])->name('delete');
Route::get('/ProductsAdmin11',[ProductController::class ,'Product'])->name('ProductsAdmin');


require __DIR__.'/auth.php';
