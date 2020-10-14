<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\DisburshmentController;
// use App\Http\Middleware\Auth;
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


Route::get('/list', function () {
    return view('user.index');
});





 Route::group(['middleware' => 'shareholder'], function () {
    // Route::get('/', function () {
    //     return view('dashboard.dashboard');
    // })->name('dashboard.dashboard');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.dashboard');


        //project
        Route::get('/project/index', [ProjectController::class, 'index'])->name('project.index');
        Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
        Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
        Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
        Route::get('/project/show/{id}', [ProjectController::class, 'show'])->name('project.show');
        Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');

        //user
        Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/user/show/{id}',[UserController::class,'show'])->name('user.show');

        //financial
        Route::get('/financial/index', [FinancialController::class, 'index'])->name('financial.index');
        Route::get('/financial/create', [FinancialController::class, 'create'])->name('financial.create');

        //disburshment
        Route::get('/disburshment/index', [DisburshmentController::class, 'index'])->name('disburshment.index');
        Route::get('/disburshment/create', [DisburshmentController::class, 'create'])->name('disburshment.create');
        Route::post('/disburshment/store', [DisburshmentController::class, 'store'])->name('disburshment.store');
        Route::get('/disburshment/edit/{id}', [DisburshmentController::class, 'edit'])->name('disburshment.edit');
        Route::post('/disburshment/update/{id}', [DisburshmentController::class, 'update'])->name('disburshment.update');
        Route::get('/disburshment/show/{id}',[DisburshmentController::class,'show'])->name('disburshment.show');


      });

        //Auth::routes();
        Auth::routes(['register' => false]); //disable register route.['except' => 'logout']

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
