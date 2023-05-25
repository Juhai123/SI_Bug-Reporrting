<?php

use App\Http\Controllers\Admin\BugController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\ManajemenUserController;
use App\Http\Controllers\Admin\ProgrammerController as AdminProgrammerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PICController;
use App\Http\Controllers\PICProject\BugController as PICProjectBugController;
use App\Http\Controllers\Programmer\HistoryTaskProgrammer;
use App\Http\Controllers\Programmer\TaskProgrammer;
use App\Http\Controllers\ProgrammerController;
use App\Models\Task;
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
    return view('auth.login');
});

Auth::routes();

// Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
// Route::get('pic', [HomeController::class, 'index'])->name('home');
// Route::get('programmer', [ProgrammerController::class, 'index'])->name('programmer.dashboard');


Route::middleware('role:admin')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('bug', BugController::class);
    Route::resource('task', TaskController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('programmer', AdminProgrammerController::class);
    Route::resource('user', ManajemenUserController::class);
    Route::resource('history', HistoryController::class);
    });

Route::middleware('role:pic_project')->name('pic.')->prefix('pic')->group(function(){
    Route::get('/', [PICController::class, 'index'])->name('index');
    Route::resource('bug', PICProjectBugController::class);
        });

Route::middleware('role:programmer')->name('programmer.')->prefix('programmer')->group(function(){
        Route::get('/', [ProgrammerController::class, 'index'])->name('index');
        Route::resource('task', TaskProgrammer::class);
        Route::resource('historytask', HistoryTaskProgrammer::class);
                });
