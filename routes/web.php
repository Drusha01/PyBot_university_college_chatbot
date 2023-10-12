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
    Route::get('/chatbox', function () {
        return view('admin.chatbox');
    })->name('chatbox');
    Route::get('/user-management', function () {
        return view('admin.user-management');
    })->name('user-management');
    Route::get('/admin-setting', function () {
        return view('admin.admin-setting');
    })->name('admin-setting');
    Route::get('/admin-profile', function () {
        return view('admin.admin-profile');
    })->name('admin-profile');
    Route::get('/admin-notification', function () {
        return view('admin.admin-notification');
    })->name('admin-notification');
});
