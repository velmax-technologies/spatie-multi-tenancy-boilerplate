<?php

use Illuminate\Support\Facades\Route;
use Modules\Settings\Http\Controllers\SettingsController;

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/settings', [SettingsController::class, 'show']);

    Route::put('/settings', [SettingsController::class, 'update']);

});
