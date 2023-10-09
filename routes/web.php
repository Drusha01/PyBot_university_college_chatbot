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
    return view('chat');
});


Route::get('/chat-live', function () {
    return view('chat-live');
});

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/colleges', function () {
        return view('admin.colleges');
    })->name('colleges');
    Route::get('/department', function () {
        return view('admin.department');
    })->name('department');

});
