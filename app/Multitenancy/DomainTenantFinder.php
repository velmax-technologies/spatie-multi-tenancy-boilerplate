<?php

namespace App\Multitenancy;

use App\Models\Domain;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Spatie\Multitenancy\TenantFinder\TenantFinder;

class DomainTenantFinder  extends TenantFinder
{
   public function findForRequest(Request $request): ?Tenant
    {
        $host = strtolower($request->getHost());

        $domain = Domain::query()
            ->where('domain', $host)
            ->first();

        return $domain?->tenant;
    }
}
