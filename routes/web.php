<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\aProductController;
use App\Http\Controllers\SettingController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get("/home",[MainController::class, 'home']);
Route::get("/bhome",[MainController::class, 'bhome']);
Route::get("/buyer",[MainController::class, 'buyer']);
Route::get("/daily",[MainController::class, 'daily']);
Route::get("/report",[MainController::class, 'report']);
Route::get("/calc",[MainController::class, 'calc']);

// PRODUCTS
Route::get("/product",[ProductController::class, 'product']);
Route::get("/add_product",[aProductController::class, 'index']);
Route::post('store',[aProductController::class,'store']);
Route::get('show',[aProductController::class,'show']);
Route::delete('/delete_product/{id}',[aProductController::class,'destroy']);
Route::get('edit_product/{id}',[aProductController::class,'edit']);


//SELL
Route::get('sell_product/{id}',[aProductController::class,'sell']);
Route::post('/sell_to',[aProductController::class,'sells']);
Route::post('add_to_cart',[aProductController::class,'addToCart']);
Route::get('cartlist',[aProductController::class,'cartList']);
Route::post('/sell_to',[aProductController::class,'sells1']);
Route::get('/sell',[aProductController::class,'selllist']);
Route::get('/bproduct',[aProductController::class,'buylist']);
Route::post('update_product/{id}',[aProductController::class,'update']);
Route::get('removecart/{id}',[aProductController::class,'removeCart']);
Route::get("/detail/{id}",[aProductController::class,'detail']);
Route::get("/detail2/{id}",[aProductController::class,'detail2']);
Route::get("/detail1/{id}",[CompanyController::class,'detail1']);

Route::get("/ordernow",[aProductController::class,'orderNow']);
Route::post("/orderplace",[aProductController::class,'orderPlace']);
Route::get("/myorder",[aProductController::class,'myOrder']);
Route::get("/report",[aProductController::class, 'report']);

Route::get("/invoice",[aProductController::class, 'invoice']);





//SETTING+ PROFILE

Route::get('/setting',[SettingController::class,'setting']);
Route::get("/profile",[SettingController::class, 'profile']);

Route::get('/create_profile',[SettingController::class,'create']);
Route::post('/create_profile',[SettingController::class,'store']);

Route::get('edit_profile/{id}',[SettingController::class,'edit']);
Route::put('update_profile/{id}',[SettingController::class,'update']);


// CONTACTS

Route::get("/contact",[ContactController::class, 'contact']);
Route::get("/create_contact",[ContactController::class, 'create']);
Route::post("/create_contact",[ContactController::class, 'store']);
Route::get("/edit_contact/{id}", [ContactController::class, 'edit']);
Route::put("/update_contact/{id}", [ContactController::class, 'update']);
Route::delete("/delete_contact/{id}", [ContactController::class, 'delete']);



//COMPANY

Route::get("/company",[CompanyController::class, 'company']);
Route::get("/create_company",[CompanyController::class, 'create']);
Route::post("/create_company",[CompanyController::class, 'store']);
Route::get("/edit_company/{id}", [CompanyController::class, 'edit']);
Route::put("/update_company/{id}", [CompanyController::class, 'update']);
Route::delete("/delete_company/{id}", [CompanyController::class, 'delete']);


Route::get("/login",[MainController::class, 'login']);
Route::get("/signup",[MainController::class, 'signup']);
Route::post('create',[MainController::class, 'create'])-> name('auth.create');
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
Route::get('/auth/signup',[MainController::class, 'signup'])->name('auth.signup');


Route::get("/blogin",[MainController::class, 'blogin']);
Route::get("/bsignup",[MainController::class, 'bsignup']);
Route::post('create',[MainController::class, 'create'])-> name('auth.create');
Route::post('/auth/bsave',[MainController::class, 'bsave'])->name('auth.bsave');
Route::post('/auth/bcheck',[MainController::class, 'bcheck'])->name('auth.bcheck');
Route::get('/blogout',[MainController::class, 'blogout'])->name('auth.blogout');
Route::get('/auth/blogin',[MainController::class, 'blogin'])->name('auth.blogin');
Route::get('/auth/bsignup',[MainController::class, 'bsignup'])->name('auth.bsignup');
