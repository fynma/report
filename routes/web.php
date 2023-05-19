<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::get('/login', [loginController::class, 'showLoginForm'])->name('viewlogin');
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/admin', [adminController::class, 'admin'])->name('admin');
Route::get('/user' , [userController ::class, 'index'])->name('user`');



Route::get('/', function () {
    return view('index');
});

Route::get('/chat', function () {
    return view('chat-index');
});