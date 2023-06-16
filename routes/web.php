<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/articles', ArticleController::class);
    Route::resource('/tailes', TailController::class);
    Route::resource('/users', UserController::class);
    Route::get('/privet', [UserController::class, 'privet'])->name('privet');
    Route::get('/firm', [UserController::class, 'firm'])->name('firm');
    Route::get('/student', [StudentController::class, 'index'])->name('student');
});

Route::prefix('admin')->group(function (){
    Route::get('/login',[AdminController::class, 'index'])->name('login_from');
    Route::get('/login/owner',[AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';

