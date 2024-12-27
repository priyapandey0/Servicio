<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Login\LoginController;
use App\Http\Controllers\Backend\ForgetPassword\ForgetPasswordController;
use App\Http\Controllers\Backend\Configuration\ConfigurationController;
use App\Http\Controllers\Backend\Service\ServiceController;
use App\Http\Controllers\Backend\Banner\BannerController;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['guest', 'autoRefresh'])->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.page');
    Route::post('login', [LoginController::class, 'login'])->name('login'); 

    // Forget Password
    Route::get('forget-password', [ForgetPasswordController::class, 'showForgotPasswordForm'])->name('show.forgot.password.form');
    Route::post('forgot-password', [ForgetPasswordController::class, 'sendResetLink'])->name('password.email');
    Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('reset-password', [ForgetPasswordController::class, 'resetPassword'])->name('password.update');
});

Route::middleware(['auth', 'autoRefresh'])->group(function () {
    Route::get('dashboard', function () {
        return view('backend.pages.dashboard.dashboard');
    })->name('home');

    // Configuration
    Route::get('configuration', [ConfigurationController::class, 'configpage'])->name('config.page');
    Route::post('update-config-record', [ConfigurationController::class, 'updateRecord'])->name('update.config.record');
    Route::post('update-config-logo', [ConfigurationController::class, 'updateLogo'])->name('update-config-logo');
    Route::post('update-confog-favicon', [ConfigurationController::class, 'updateFavicon'])->name('update.config.favicon');

    //Services

    Route::resource('service', ServiceController::class);

    Route::resource('banner', BannerController::class);


    // Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
