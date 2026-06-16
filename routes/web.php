<?php

use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    Tenant::create([
            'name' => 'Tenant name',
            'database' => 'tenant_tenant',
            'domain' => 'tenant.spatie-multi-tenancy.local'
        ]);

        Tenant::create([
            'name' => 'Jakonya',
            'database' => 'tenant_jakonya',
            'domain' => 'jakonya.spatie-multi-tenancy.local'
        ]);
});



Route::middleware('tenant')->group(function() {
    Route::get('/test', function () {

    $tenant = Tenant::current();

    $tenant->makeCurrent();

    // dd([
    //     'tenant' => $tenant->name,
    //     'database' => DB::connection('tenant')->getDatabaseName(),
    // ]);

    return DB::connection()->getDatabaseName();
});
});