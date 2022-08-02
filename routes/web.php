<?php

use App\Http\Controllers\Usermaster;
use App\Http\Controllers\UsermasterController;
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
Route::group(['prefix' => '/user'], function () {
    Route::get('/', [UsermasterController::class, 'form'])->name('user.form');
    Route::post('/', [UsermasterController::class, 'register'])->name('user.register');
    Route::get('/display', [UsermasterController::class, 'display'])->name('user.display');
    Route::get('/delete/{id}', [UsermasterController::class, 'delete'])->name('user.delete');
    Route::get('/trash', [UsermasterController::class, 'trash'])->name('user.trash');
    Route::get('/restore/{id}', [UsermasterController::class, 'restore'])->name('user.restore');
    Route::get('/forceDelete/{id}', [UsermasterController::class, 'forceDelete'])->name('user.forceDelete');
    Route::get('/edit/{id}', [UsermasterController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UsermasterController::class, 'update'])->name('user.update');
});
