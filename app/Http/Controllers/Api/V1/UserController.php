<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class UserController extends Controller
{
    use DisableAuthorization;

    protected $model = User::class;

    /**
     * Retrieves currently authenticated user based on the guard.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function resolveUser()
    {
        return auth()->user();
    }
}
