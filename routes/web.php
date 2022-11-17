<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\BatchesController;
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
    return view('index');
});
//view 
Route::get('/view',[BatchController::class,'viewBatch'])->name('view');

//to delete
Route::get('/delete/{id}',[BatchController::class,'deleteBatch']);


// to search
Route::get('/search-date/',[BatchController::class,'searchByDate'])->name('searchDate');


//to save
Route::post('/add-batch',[BatchController::class, 'saveBatch'])->name('addBatch');