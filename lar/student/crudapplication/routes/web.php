<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageUploadController;




Route::get('/', function () {
    return view('welcome');
});

Route::resource('/contact', ContactController::class);

// Route::get('/index',[ContactController::class,'index']);
Route::get('/download{document}',[ContactController::class]);
Route::get('/view{id}',[ContactController::class,'view']);


Route::get('/admin', [AdminController::class, 'admin']);
//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');
