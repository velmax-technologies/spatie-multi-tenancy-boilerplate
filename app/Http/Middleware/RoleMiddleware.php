<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\ApiStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\ApiResponseFormat;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = $request->user();
        if(!$user || ! $user->roles->pluck('name')->contains($role)){
            $role = Str::of($role)
                        ->replace('_', ' ')
                        ->title();
            $error_message = "Unauthorized. $role rights required!";
            return ApiResponseFormat::jsonResponse(
                ApiStatus::ERROR,
                403,
                'Unauthorized!',
                [
                    "error_message" => $error_message
                ]
            );
        }
        return $next($request);
    }
}