<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Post;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class PostController extends Controller
{
    use DisableAuthorization;

    protected $model = Post::class;

    /**
     * Retrieves currently authenticated user based on the guard.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function resolveUser()
    {
        return auth()->user();
    }

    /**
     * The attributes that are used for filtering.
     *
     * @return array
     */
    public function searchableBy(): array
    {
        return ['title'];
    }
}
