<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Enums\ApiStatus;


trait ApiResponseFormatTrait
{   

 public static function jsonResponse(
        string $status,
        int $statusCode,
        string $message,
        array $data,
    ) {

        $response = [
            
                'status'      => $status,
                'status_code' => $statusCode,
                'message'     => $message,
            
        ];


        if ($status == ApiStatus::SUCCESS) {
            $response['data'] = $data;
        }

        if ($status == ApiStatus::ERROR) {
            $response['errordetails'] = $data;
        }

        return response()->json($response, $statusCode);
    }    
}