<?php
namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;
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

    public function afterStore(Model $model, array $request): void {
        $model->syncRoles([]); // remove all assigne roles

        foreach (request()->roles as $role) {
            $user_role = Role::findByName($role, 'sanctum');
            $model->assignRole($user_role);
            $user_role = Role::findByName($role, 'web');
            $model->assignRole($user_role);
        }
    }   
}