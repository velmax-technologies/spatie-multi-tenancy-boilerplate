<?php

namespace App\Models;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
     protected $fillable = [
        'tenant_id',
        'domain',
        'is_primary'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
