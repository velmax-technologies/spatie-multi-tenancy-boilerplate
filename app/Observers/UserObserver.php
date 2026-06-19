<?php

namespace App\Observers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;
class UserObserver
{
    public function created(User $user)
    {
    }
}
