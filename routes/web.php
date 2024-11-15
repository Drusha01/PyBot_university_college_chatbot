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
use App\Http\Livewire\Page\Chat\Chat;
use App\Http\Livewire\Page\AboutUs\AboutUs;
use App\Http\Livewire\Page\Academic\Academic;
use App\Http\Livewire\Page\Admission\Admission;
use App\Http\Livewire\Page\Forums\Forums;
use App\Http\Livewire\Page\usersetting\Usersetting;


// python executioner
use App\Http\Controllers\Python_executioner;

// admin
use App\Http\Livewire\Admin\Dashboard\Dashboard;
use App\Http\Livewire\Admin\Colleges\Colleges;
use App\Http\Livewire\Admin\Department\Department;
use App\Http\Livewire\Admin\Usermanagement\Usermanagement;
use App\Http\Livewire\Admin\Chatbox\Chatbox;
use App\Http\Livewire\Admin\Setting\Setting;
use App\Http\Livewire\Admin\Model\Model;
use App\Http\Livewire\Admin\Ccs\Ccs;
use App\Http\Livewire\Admin\AdminProfile\AdminProfile;
use App\Http\Livewire\Admin\AdminNotification\AdminNotification;
use App\Http\Livewire\Admin\ProfanityWords\ProfanityWords;
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
    Route::get('/profile', Profile::class)->name('page.profile');
    Route::get('/chat', Chat::class)->name('page.chat');
});

Route::prefix('/')->group(function () {
    Route::get('/', Home::class)->name('page.home');
    Route::get('/AboutUs', AboutUs::class)->name('page.AboutUs');
    // Route::get('/profile', Profile::class)->name('page.profile');
   
    Route::get('/academic', Academic::class)->name('page.academic');
    Route::get('/admission', admission::class)->name('page.admission');
    Route::get('/forums', Forums::class)->name('page.forums');
});

Route::get('/test', [Python_executioner::class, 'test'])->name('python.test');
Route::get('/train_model', [Python_executioner::class, 'train_model'])->name('python.training');
Route::get('/create_new_intents', [Python_executioner::class, 'create_new_intent'])->name('python.create-new-intent');
Route::get('/get_intents_list', [Python_executioner::class, 'intents_list'])->name('python.intents-list');
Route::get('/pychat', [Python_executioner::class, 'pychat'])->name('pychat.chat');
Route::get('/model_list', [Python_executioner::class, 'model_list'])->name('python.models_list');
Route::get('/deploy_model', [Python_executioner::class, 'deploy_model'])->name('python.deploy_model');
Route::get('/train_model_v0', [Python_executioner::class, 'train_model_v0'])->name('python.train_model_v0');




// admin
Route::middleware([Authenticated::class,AccountisValid::class,AccountisStudent::class])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/colleges', Colleges::class)->name('colleges');
        Route::get('/department', Department::class)->name('department');
        Route::get('/profanity-words', ProfanityWords::class)->name('profanity-words');
        Route::get('/usermanagement', Usermanagement::class)->name('usermanagement');
        Route::get('/chatbox', Chatbox::class)->name('chatbox');
        Route::get('/setting', Setting::class)->name('setting');
        Route::get('/model', Model::class)->name('model');
        Route::get('/ccs', Ccs::class)->name('ccs');
        Route::get('/admin-profile', AdminProfile::class)->name('admin-profile');
        Route::get('/admin-notification', AdminNotification::class)->name('admin-notification');
        
    });
});
