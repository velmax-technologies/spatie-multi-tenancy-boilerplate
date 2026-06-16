<?php

namespace App\Models;

use App\Traits\HasActivityLoggerTrait;
use Spatie\Activitylog\Support\LogOptions;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'username', 'phone', 'email', 'password', 'is_active', 'domain', 'database'])]
//#[Hidden(['password', 'remember_token'])]

class Tenant extends BaseTenant
{
    use HasActivityLoggerTrait;
}