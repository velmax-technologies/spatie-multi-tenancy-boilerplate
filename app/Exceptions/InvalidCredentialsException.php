<?php

namespace App\Exceptions;

use Exception;
use App\Enums\ApiStatus;
use Illuminate\Http\JsonResponse;
use App\Traits\ApiResponseFormatTrait;

class InvalidCredentialsException extends Exception
{
    public function __construct(
        string $message = 'Invalid credentials.',
        int $code = 401
    ) {
        parent::__construct($message, $code);
    }

    public function render($request): JsonResponse
    {
        return ApiResponseFormatTrait::jsonResponse(
                ApiStatus::ERROR,
                401,
                'Unauthenticated.',
                [
                   "error_message" => "Invalid credentials"
                ]
            );
            
        return response()->json([
            'success' => false,
            'message' => $this->getMessage(),
            'errors' => [
                'email' => ['Invalid email or password.']
            ]
        ], 401);
    }
}
