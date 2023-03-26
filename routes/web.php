<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PICController;
use App\Http\Controllers\ProgrammerController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
// Route::get('pic', [HomeController::class, 'index'])->name('home');
// Route::get('programmer', [ProgrammerController::class, 'index'])->name('programmer.dashboard');


Route::middleware('role:admin')->group(function(){
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    });

Route::middleware('role:pic_project')->group(function(){
    Route::get('pic', [PICController::class, 'index'])->name('pic.index');
        });

Route::middleware('role:programmer')->group(function(){
        Route::get('pic', [ProgrammerController::class, 'index'])->name('programmer.index');
                });
