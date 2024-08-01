<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmailController;    
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index']);
Route::post('pay', [PaypalController::class, 'pay'])->name('payment');
Route::get('success', [PaypalController::class, 'success']);
Route::get('error', [PaypalController::class, 'error']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';

Route::post('email', [EmailController::class,'index'])->name('email.route');