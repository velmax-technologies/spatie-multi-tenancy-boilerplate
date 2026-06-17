<?php

namespace App\Models;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Model;

class PlanFeature extends Model
{
      protected $fillable = [
        'plan_id',
        'feature',
        'value'
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
