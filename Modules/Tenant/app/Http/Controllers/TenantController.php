<?php

namespace Modules\Tenant\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Jobs\CreateTextFileJob;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Hashh;
use App\Http\Controllers\CrudController;
use Modules\Tenant\Http\Requests\TenantRequest;
use Modules\Tenant\Transformers\TenantResource;
use App\Jobs\TenantProvision\CreateTenantDatabaseJob;

class TenantController extends CrudController
{

    public function __construct() {
        $this->model = Tenant::class;
        $this->jsonResource = TenantResource::class;
        $this->formRequest = TenantRequest::class;
    }

}
