<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Routing\RouteGroup;
use Symfony\Component\HttpFoundation\Request;
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

Route::get('/', [HomeController::class,'index'])->name('home');


// Route::view('login','auth.login-form');
// Route::post('login',[LoginController::class,'postLogin'])->name('login');

Route::prefix('admin')->middleware('check-admin-role')->group(function () {
        Route::get('/', function () {
            return view('backend.dashboard');
                })->name('dashboard');

        Route::prefix('cate')->group(function () {
        Route::get('index',[CategoryController::class,'index'])->name('cate.index');
        Route::get('add-cate',[CategoryController::class,'create'])->name('cate.create');
        Route::post('add-cate',[CategoryController::class,'store'])->name('cate.store');
        Route::get('remove/{id}',[CategoryController::class,'destroy'])->name('cate.destroy');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('cate.edit');
        Route::post('edit/{id}', [CategoryController::class, 'update'])->name('cate.update');
    });
    
        Route::prefix('post')->group(function () {
        Route::get('index',[PostController::class,'index'])->name('post.index');
        Route::get('add-post',[PostController::class,'create'])->name('post.create');
        Route::post('add-post',[PostController::class,'store'])->name('post.store');
        Route::get('remove/{id}',[PostController::class,'destroy'])->name('post.destroy');
        Route::get('edit/{id}',[PostController::class,'edit'])->name('post.edit');
        Route::post('edit/{id}', [PostController::class, 'update']);
    });
});

    Route::get('post/{id}',[PostController::class,'detail'])->name('post.detail');

    Route::post('post/api/tang-view', [PostController::class, 'tangView'])
        ->name('post.tangView');
    // Route::get('posts',[PostController::class,'postPage'])->name('')



    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard1');
