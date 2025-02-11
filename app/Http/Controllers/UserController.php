<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user->profile);
    }

    public function showPosts($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user->posts);
    }
}
