<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function user_posts ($user_id)
    {
        $user = User::findOrFail($user_id);

        return $user->posts;
    }
}
