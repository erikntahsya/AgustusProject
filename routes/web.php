<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;

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



Route::post('/register', [AuthController::class, 'register']);
Route::get('/registerr', [AuthController::class, 'createuser']);
 Route::middleware('statuslogin')->group(function (){

    Route::get('reports', [ReportController::class, 'index'])->name('reports');
    
    
    Route::get('/transaction', function () {
        return view('transaction');
    })->name('transaction.create');
    
    Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
    
    Route::get('home', function () {
        return view('home'); 
    })->name('home');
    Route::get('/home',[UserController::class,'home']);
    Route::get('/index',[UserController::class,'index']);
    
    // Route::resource('users', UserController::class);    
    Route::middleware('auth')->group(function () {
        Route::resource('topups', TopUpController::class);
    });
    
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
    Route::resource('topups', TopUpController::class);
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




