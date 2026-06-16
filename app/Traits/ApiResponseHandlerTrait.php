<?php

namespace App\Traits;

use App\Enums\Messages;
use App\Enums\ApiStatus;
use Illuminate\Http\Response;
use App\Traits\ApiResponseFormat;
trait ApiResponseHandlerTrait
{
     protected function preparedResponse(string $actionName)
    {
       $actions = [
            'login'    => [ApiStatus::SUCCESS, Response::HTTP_OK, Messages::LOGGEDIN_SUCCESSFULLY],
            'logout'    => [ApiStatus::SUCCESS, Response::HTTP_OK, Messages::LOGGEDOUT_SUCCESSFULLY],
            'index'   => [ApiStatus::SUCCESS, Response::HTTP_OK, Messages::RETRIEVED_SUCCESSFULLY],
            'store'   => [ApiStatus::SUCCESS, Response::HTTP_CREATED, Messages::CREATED_SUCCESSFULLY],
            'show'    => [ApiStatus::SUCCESS, Response::HTTP_OK, Messages::FETCHED_SUCCESSFULLY],
            'update'  => [ApiStatus::SUCCESS, Response::HTTP_OK, Messages::UPDATED_SUCCESSFULLY],
            'destroy' => [ApiStatus::SUCCESS, Response::HTTP_OK, Messages::TRASHED_SUCCESSFULLY]
        ];

        if (array_key_exists($actionName, $actions)) {
             
            return [
                 
                    'status'      => $actions[$actionName][0],
                    'status_code' => $actions[$actionName][1],
                    'message'     => $actions[$actionName][2], 
            ];
        }
    }
}
