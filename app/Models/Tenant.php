<?php

namespace App\Models;

use App\Models\Domain;
use App\Models\Subscription;
use App\Models\SubscriptionInvoice;
use App\Traits\HasActivityLoggerTrait;
use Spatie\Activitylog\Support\LogOptions;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['business_name', 'slug', 'name', 'database', 'database_host', 'database_port', 'database_username', 'database_password', 'email', 'phone', 'is_active'])]

class Tenant extends BaseTenant
{
    use HasActivityLoggerTrait;

     protected $casts = [
        'settings' => 'array',
        'data' => 'array',
        'is_active' => 'boolean',
        'trial_ends_at' => 'datetime',
    ];

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function activeSubscription()
    {
        return $this->hasOne(Subscription::class)
            ->where('status', 'active')
            ->latest();
    }

    public function invoices()
    {
        return $this->hasMany(SubscriptionInvoice::class);
    }
}