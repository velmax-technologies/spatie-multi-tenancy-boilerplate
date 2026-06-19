<?php

namespace Modules\Tenant\Http\Controllers;

use Throwable;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Jobs\CreateTextFileJob;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Hashh;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CrudController;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Tenant\Http\Requests\TenantRequest;
use Modules\Tenant\Transformers\TenantResource;
use App\Jobs\Tenancy\TenantProvision\ActivateTenantJob;
use App\Jobs\Tenancy\TenantProvision\CreateTenantAdminJob;
use App\Jobs\Tenancy\TenantProvision\SeedTenantDatabaseJob;
use App\Jobs\Tenancy\TenantProvision\RunTenantMigrationsJob;
use App\Jobs\Tenancy\TenantProvision\CreateTenantDatabaseJob;


class TenantController extends CrudController
{

    public function __construct() {
        $this->model = Tenant::class;
        $this->jsonResource = TenantResource::class;
        $this->formRequest = TenantRequest::class;
    }

    public function afterStore(Model $model, array $request): void {
       
        Bus::chain([
            new CreateTenantDatabaseJob($model->database),
            new RunTenantMigrationsJob($model),
            new SeedTenantDatabaseJob($model),
            new CreateTenantAdminJob($model, $request),
            new ActivateTenantJob($model),
        ])->catch(function (Throwable $e) {

            Log::error('Job chain failed: '.$e->getMessage());

        })->dispatch();

        Log::error('Done store event');

    }
}




     


