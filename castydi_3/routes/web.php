<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShopController;
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
Route::get('/adim', [ProductController::class,'index']);

route::get('notification/{order_id}', [NotificationController::class,'notification'])->name('notification');


Route::get('/', [HomeController::class,'index']);

Route::group(['prefix' => 'admin'], function () {
   Route::resource('products',ProductController::class);
   Route::resource('categories',CategoryController::class);
   Route::resource('customers',CustomerController::class);
   Route::resource('orders',OrderController::class);
   Route::resource('users',UserController::class);
   Route::get('search', [ProductController::class,'search'])->name('products.search');
});



Route::get('products', [ProductsController::class, 'index']);
Route::get('products/{id}', [ProductsController::class, 'show'])->name('chi_tiet_san_pham');
Route::get('/add-to-cart/{idProducts}', [CartController::class, 'addToCart'])->name('add-to-cart');

// Route::get('register', [RegisterController::class, 'register'])->name('register');
// Route::post('postRegister', [RegisterController::class, 'postRegister'])->name('postRegister');

// Route::get('login', [LoginController::class, 'login'])->name('login');
// Route::post('postLogin', [LoginController::class, 'postLogin'])->name('postLogin');

// Route::get('/page-guest', [UserController::class, 'showPageGuest']);
// Route::get('/page-admin', [UserController::class, 'showPageAdmin']);
// Route::get('/productsdetail', [UserController::class, 'showPageAdmin']);

// Route::get('custom-validation', [FormController::class, 'checkValidation'])->name('form.submit');

Route::get('/carts',[CartController::class,'getCart'])->name('shop.getCart');
Route::post('/update',[CartController::class,'update'])->name('shop.update');
Route::get('/delete/{id}',[CartController::class,'destroy'])->name('shop.destroyCart');
Route::get('/checkout',[CartController::class,'checkout'])->name('shop.checkoutCart');
Route::post('/complete',[CartController::class,'complete'])->name('shop.complete');
Route::get('/success/{order_id}',[CartController::class,'success'])->name('shop.success');
Route::get('/{idProduct}/add-to-cart', [CartController::class,'addToCart'])->name('add-to-cart');
Route::get('search', [ProductsController::class, 'search'])->name('customers.search');


Route::get('/404',[ShopController::class,'erros'])->name('shop.404');

Route::get('/login',[ShopController::class,'login'])->name('login');
Route::post('/postLogin',[ShopController::class,'postLogin'])->name('postLogin');
Route::get('/register',[ShopController::class,'register'])->name('shop.register');
Route::post('/postRegister',[ShopController::class,'postRegister'])->name('shop.postRegister');
Route::get('/product-detail/{id}',[HomeController::class,'product_detail'])->name('shop.product_detail');

Route::get('/shop/products',[ShopController::class,'products'])->name('shop.products');
Route::get('/shop/category/{id}',[ShopController::class,'category'])->name('shop.category');

Route::get('/questions',[ShopController::class,'questions'])->name('shop.questions');

Route::get('/my-account',[ShopController::class,'my_account'])->name('shop.my-account')->middleware('auth:customer');





