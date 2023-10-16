<?php

use Illuminate\Support\Facades\Route;


// authentication middleware
use App\Http\Middleware\Logout;
use App\Http\Middleware\Authenticated;
use App\Http\Middleware\Unauthenticated;
use App\Http\Middleware\AccountisValid;
use App\Http\Middleware\AccountisAdmin;
use App\Http\Middleware\AccountisStudent;


// authentication
use App\Http\Livewire\Authentication\Signout;
use App\Http\Livewire\Authentication\Login;
use App\Http\Livewire\Authentication\RegisterEmail;
use App\Http\Livewire\Authentication\ForgotPassword;
use App\Http\Livewire\Authentication\AccountRecovery;
use App\Http\Livewire\Authentication\AccountDeleted;
use App\Http\Livewire\Authentication\AccountInactive;

// page
use App\Http\Livewire\Page\Home\Home;
use App\Http\Livewire\Page\profile\Profile;
use App\Http\Livewire\Page\AboutUs\AboutUs;
use App\Http\Livewire\Page\Academic\Academic;
use App\Http\Livewire\Page\Admission\Admission;
use App\Http\Livewire\Page\Forums\Forums;
use App\Http\Livewire\Page\usersetting\Usersetting;


// python executioner
use App\Http\Controllers\Python_executioner;


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

// authentication
Route::get('/logout', Signout::class)->middleware(Logout::class)->name('logout');
Route::middleware([Unauthenticated::class,AccountisValid::class])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/signup',RegisterEmail::class)->name('signup');
    Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/account/recovery/{hash}', AccountRecovery::class)->name('account-recovery');
});

// account disabled
Route::middleware([Authenticated::class])->group(function () {
    Route::get('/deleted', AccountDeleted::class)->name('account.deleted');
    Route::get('/inactive', AccountInactive::class)->name('account.inactive');
});

// page
Route::middleware([Authenticated::class, AccountisValid::class, AccountisAdmin::class])->group(function () {
    Route::get('/', Home::class)->name('page.home');
    Route::get('/AboutUs', AboutUs::class)->name('page.AboutUs');
    Route::get('/profile', Profile::class)->name('page.profile');
    Route::get('/academic', Academic::class)->name('page.academic');
    Route::get('/admission', admission::class)->name('page.admission');
    Route::get('/forums', Forums::class)->name('page.forums');
});

Route::get('/test', [Python_executioner::class, 'test'])->name('python.test');
Route::get('/execute_script', [Python_executioner::class, 'execute_script'])->name('python.training');


Route::middleware([Authenticated::class,AccountisValid::class,AccountisStudent::class])->group(function () {
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
        Route::get('/ccs', function () {
            return view('admin.ccs');
        })->name('ccs');
        Route::get('/model', function () {
            return view('admin.model');
        })->name('model');
        Route::get('/chatbox', function () {
            return view('admin.chatbox');
        })->name('chatbox');
        Route::get('/user-management', function () {
            return view('admin.user-management');
        })->name('user-management');
        Route::get('/setting', function () {
            return view('admin.setting');
        })->name('setting');
        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('profile');
        Route::get('/notification', function () {
            return view('admin.notification');
        })->name('notification');
    });
});
