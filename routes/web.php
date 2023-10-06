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


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/colleges', function () {
    return view('admin.colleges');
})->name('colleges');

Route::get('/admin/department', function () {
    return view('admin.department');
})->name('department');

Route::get('/admin/chatbox', function () {
    return view('admin.chatbox');
})->name('chatbox');