<?php

use Illuminate\Support\Facades\Route;
use Modules\Tenant\Http\Controllers\TenantController;

Route::middleware(['auth:sanctum', 'role:super_admin'])->group(function () {
    Route::apiResource('tenants', TenantController::class)->names('tenant');
});
