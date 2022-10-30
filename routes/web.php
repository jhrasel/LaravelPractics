<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplicationSettingController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Admin Controller
|--------------------------------------------------------------------------
*/
Route::get('/home', [AdminController::class, 'home'])->name('home')->middleware('auth');


/*
|--------------------------------------------------------------------------
| Profile Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'profile'], function(){
    Route::get('view', [ProfileController::class, 'profile_view'])->name('profile.view');
    Route::post('update', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::get('password', [ProfileController::class, 'profile_password'])->name('profile.password');
    Route::post('password_update', [ProfileController::class, 'profile_password_update'])->name('profile.password.update');
});

/*
|--------------------------------------------------------------------------
| Application Setting Controller
|--------------------------------------------------------------------------
*/
// Route::group(['prefix' => 'application_setting'], function(){
//     Route::get('create', [ApplicationSettingController::class, 'create'])->name('application_setting.create');
//     Route::get('index', [ApplicationSettingController::class, 'index'])->name('application_setting.index');
//     Route::post('store', [ApplicationSettingController::class, 'store'])->name('application_setting.store');
//     Route::get('edit/{id}', [ApplicationSettingController::class, 'edit'])->name('application_setting.edit');
//     Route::post('update', [ApplicationSettingController::class, 'update'])->name('application_setting.update');
//     Route::get('delete/{id}', [ApplicationSettingController::class, 'delete'])->name('application_setting.delete');
// });

Route::get('/general-settings', [ApplicationSettingController::class, 'index'])->name('general_setting');
Route::post('/update-settings', [ApplicationSettingController::class, 'updateSetting'])->name('update_setting');


/*
|--------------------------------------------------------------------------
| Application Settings Controller
|--------------------------------------------------------------------------
*/


