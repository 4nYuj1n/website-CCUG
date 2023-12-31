<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('index');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login'])->name('login.post');
    Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
    Route::post('/register',[RegisterController::class,'register'])->name('register.post');
    Route::get('/forgot-password',[LoginController::class,'forgotPassword'])->name('login.forgot-password');
    Route::get('/profile',function(){
        return view('profile.index');
    })->name('profile');
    Route::get('/', function () {
        return view('index');
    })->name('home');
    Route::get('/about-us',function(){
        return view('about-us');
    })->name('about-us');
    Route::get('/blog',function(){
        return view('blog.index');
    })->name('blog');
    Route::get('/challenges',function(){
        return view('chall.index');
    })->name('chall');
    Route::get('/scoreboard',function(){
        return view('scoreboard.index');
    })->name('scoreboard');
    Route::get('/faq',function(){
        return view('faq.index');
    })->name('faq');
});
Route::get('/courses',[CourseController::class,'index'])->name('courses');