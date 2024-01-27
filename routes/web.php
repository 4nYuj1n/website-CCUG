<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

Route::get('/about-us',function(){
    return view('about-us');
})->name('about-us');
Route::get('/',[DashboardController::class, 'index'])->name('home');
Route::get('/home',[DashboardController::class, 'index']);

Route::middleware(['guest'])->group(function(){
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login'])->name('login.post');
    Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
    Route::post('/register',[RegisterController::class,'register'])->name('register.post');
    Route::get('/forgot-password',[LoginController::class,'forgotPassword'])->name('login.forgot-password');

});

Route::resource('/course',\App\Http\Controllers\CourseController::class);

Route::middleware(['auth'])->group(function(){
    Route::middleware(['admin'])->group(function(){
        Route::get('/admin',[\App\Http\Controllers\AdminController::class,'showIndex'])->name('admin.index');
    });

    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    // Route::get('/lesson/{id}','\App\Http\Controllers\LessonController::class@index')->name('lesson.index');
    Route::resource('/profile',\App\Http\Controllers\ProfileController::class);
    Route::resource('/admin-course',\App\Http\Controllers\AdminCourseController::class);
    Route::resource('/admin-lesson',\App\Http\Controllers\AdminLessonController::class);
    Route::resource('/admin-chall',\App\Http\Controllers\AdminLessonController::class);
    Route::resource('/lesson',\App\Http\Controllers\LessonController::class);
    Route::get('/scoreboard','\App\Http\Controllers\ScoreboardController@showScoreboard')->name('scoreboard.index');
    Route::get('/challenges',function(){

        return view('chall.index');
    })->name('chall');
    Route::get('/add-chall',function(){
        return view('coming-soon');
    })->name('admin.add-chall');
    Route::get('/faq',function(){
        return view('faq.index');
    })->name('faq');
    Route::resource('/users',\App\Http\Controllers\UserController::class);
});


