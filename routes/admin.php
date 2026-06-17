<?php

use Illuminate\Support\Facades\Route;
use App\Settings\PlatformFeatureSettings;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TenantController;
use App\Http\Controllers\Admin\DashboardController;

//Route::get('/login', [AuthController::class, 'login_page'])->name('login');
            
Route::middleware(['web'])
    ->group(function () {
    
    $platformFeatures = app(PlatformFeatureSettings::class);

    Route::get('/login', [PageController::class, 'login_page'])->name('login');  
    
    if($platformFeatures->registration){
        Route::get('/register', [PageController::class, 'register_page'])->name('register');        
    }

});

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['web', 'auth', 'role:super_admin'])
    ->group(function () {
    
    Route::get('/admin', [PageController::class, 'home_page'])->name('admin.home');
    Route::get('/dashboard', [PageController::class, 'dashboard_page'])->name('admin.dashboard');

        

});