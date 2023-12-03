<?php


use App\Http\Controllers\AuthController;
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

Route::resource('listing', \App\Http\Controllers\ListingController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy'])
    ->middleware('auth');
Route::resource('listing', \App\Http\Controllers\ListingController::class)
    ->except(['create', 'store', 'edit', 'update', 'destroy']);

Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('user-account/create', [\App\Http\Controllers\UserAccountController::class, 'create'])->name('user-account.create');
Route::post('user-account', [\App\Http\Controllers\UserAccountController::class, 'store'])->name('user-account.store');
