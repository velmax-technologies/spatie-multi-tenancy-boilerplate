<?php

use App\Enums\Messages;
use App\Enums\ApiStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponseFormatTrait;
use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;
use App\Traits\ApiResponseFormatTraitt;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
use Illuminate\Auth\Access\AuthorizationExceptionn;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpExceptionn;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
       $middleware
            ->group('tenant', [
                \Spatie\Multitenancy\Http\Middleware\NeedsTenant::class,
                \Spatie\Multitenancy\Http\Middleware\EnsureValidTenantSession::class,
            ]);
        $middleware
            ->group('tenant-api', [
                \Spatie\Multitenancy\Http\Middleware\NeedsTenant::class,
            ]);

        $middleware->alias([
            'role' => RoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );

        // MySql Errors
        $exceptions->render(function (QueryException $e, Request $request) {
            $errorCode = $e->errorInfo[1] ?? null;
            $statusCode = 409;
           
            if ($errorCode == 1062) {
                return ApiResponseFormatTrait::jsonResponse(
                    ApiStatus::ERROR,
                    $statusCode,
                    "Duplicate entry error!",
                     [
                        "error_message" => $e->errorInfo[2]
                    ]
                );
            }  
        });

        // Error Exceptions
        $exceptions->render(function (Throwable $e, $request) {
            $http = match (true) {
                $e instanceof ValidationException => Messages::ERROR["UNPROCESSABLE"],
                $e instanceof AuthenticationException => Messages::ERROR["UNAUATHENTICATED"],
                $e instanceof AuthorizationException => Messages::ERROR["UNAUTHORIZED"],
                $e instanceof UnauthorizedException => Messages::ERROR["UNAUTHORIZED"],
                $e instanceof NotFoundHttpException => Messages::ERROR["NOT_FOUND"],
                $e instanceof ModelNotFoundException => Messages::ERROR["NOT_FOUND"],
                $e instanceof RoleDoesNotExist => Messages::ERROR["NOT_FOUND"],

                default => Messages::ERROR["INTERNAL_SERVER_ERROR"],
            };
             if (
                $e instanceof ValidationException
                ||$e instanceof AuthenticationException
                ||$e instanceof AuthorizationException
                || $e instanceof UnauthorizedException
                || $e instanceof NotFoundHttpException
                || $e instanceof ModelNotFoundException
                || $e instanceof RoleDoesNotExist
            ) {

                return ApiResponseFormatTrait::jsonResponse(
                    ApiStatus::ERROR,
                    $http["CODE"],
                    $http["SHORT"],
                     [
                        "general_error_message" =>  $http["LONG"],
                        "exact_error_message" =>  $e->getMessage(),
                    ]
                );
            }

            return null; // Let Laravel handle other exceptions
        });
          
    })->create();
