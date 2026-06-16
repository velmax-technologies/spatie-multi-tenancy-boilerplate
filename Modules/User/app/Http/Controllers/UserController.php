<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CrudController;
use Illuminate\Foundation\Http\FormRequest;
use Modules\User\Http\Requests\UserRequest;
use Modules\User\Transformers\UserResource;

class UserController extends CrudController
{
    public function __construct() {
        $this->model = User::class;
        $this->jsonResource = UserResource::class;
        $this->formRequest = UserRequest::class;
     }
    
    protected function afterStore(Model $record, FormRequest $request): void
    {
        if ($request->filled('roles')) {
            $record->syncRoles($request->roles);
        }
    }

    protected function afterUpdate(Model $record, FormRequest $request): void
    {
        if ($request->filled('roles')) {
            $record->syncRoles($request->roles);
        }
    }
}