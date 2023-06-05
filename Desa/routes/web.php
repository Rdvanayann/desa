<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\AdminController;

// Student - Image Crud
Route::get('students', [StudentController::class, 'index']);
Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);


Route::get("/",[Yonet::class,'site'])->name('web');
Route::get("/hakkımızda",[Yonet::class,'hakkımızda'])->name('hakkımızda');
Route::get("/urunlerimiz",[Yonet::class,'urunlerimiz'])->name('urunlerimiz');
Route::get("/iletisim",[Yonet::class,'iletisim'])->name('iletisim');

Route::prefix('admin')->middleware('auth')->group(function(){
Route::get('/ürünler', [ProductController::class,'index'])->name('products.index');
Route::get('/ürünler/ekle', [ProductController::class,'create'])->name('products.create');
Route::post('/ürünler/ekle', [ProductController::class,'store'])->name('products.store');
Route::get('/ürünler/{id}', [ProductController::class,'edit'])->name('products.edit');
Route::post('/ürünler/{id}', [ProductController::class,'update'])->name('products.update');
Route::get('/ürünler/sil/{id}', [ProductController::class,'delete'])->name('products.delete');
});

// Route::get("/admin",[AdminController::class,'index'])->name('adminindex');
// Route::post("/productInsert",[AdminController::class,'productInsert'])->name('productinsert');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
