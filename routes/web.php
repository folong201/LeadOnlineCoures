<?php

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

Route::get('/', function () {
    dd("merde c'est quoi ?");
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



//comomds routes
Route::get('/', function () {

    return view('welcome');
});
Route::get('courses', function () {

    return view('courses');
})->name('courses');
Route::get('/about', function () {

    return view('about');
})->name('about');

Route::get('/teacher', function () {

    return view('teacher');
})->name('teacher');

Route::get('contact', function () {

    return view('contact');
})->name('contact');
Route::get('blog.list', function () {

     return view('blog.list');
})->name('blog.list');

Route::get('blog.details', function () {

     return view('blog.details');
})->name('blog.details');

// authentificated user group
Route::group(['auth'=>'Auth'],function(){

});
