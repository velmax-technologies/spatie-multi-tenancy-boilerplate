<?php

namespace Modules\Auth\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Transformers\LoginResource;
use Modules\Auth\Transformers\ProfileResource;
use App\Exceptions\InvalidCredentialsException;
 
class AuthController extends Controller
{
 
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw new InvalidCredentialsException();
        }

        $token = $user->createToken('api-token')->plainTextToken;
        return (new LoginResource(['token' => $token]))->additional($this->preparedResponse('login'));
    }

     public function profile(Request $request)
    {
        $user = $request->user();
        return (new ProfileResource($user))->additional($this->preparedResponse('show'));

    }

     public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return (new ProfileResource($user))->additional($this->preparedResponse('logout'));
    }
    
}
