<?php


use Illuminate\Support\Facades\Route;

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

Route::get('/', App\Http\Controllers\Index\IndexeController::class)->name('index');
Route::get('/hello', App\Http\Controllers\Index\ShowController::class)->name('show');

Route::resource('listing', \App\Http\Controllers\ListingController::class);
