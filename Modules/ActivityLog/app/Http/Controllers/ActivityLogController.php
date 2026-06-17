<?php

namespace Modules\ActivityLog\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->has(['log_name', 'user_id'])) {
            // Both parameters exist and have values
        }
        else if (request()->has(['log_name'])) {
            $activity = Activity::where('log_name', request()->log_name)->get();
        }
        else{
            $authUser = Auth::user();
            $activity = Activity::causedBy($authUser)->get();
        }

        return $activity;

        // TODO:: advance filtering
    }

    
}
