<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::prefix('products')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name('products.list');
    Route::get('/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/create',[ProductController::class,'store'])->name('products.store');
    Route::get('/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
    Route::post('/{id}/edit',[ProductController::class,'update'])->name('products.update');
    Route::get('/{id}/destroy',[ProductController::class,'destroy'])->name('products.destroy');
});
