<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserSearchController extends Controller
{
    public static function searchAll() 
    {
        $users = User::pluck('name');

        return response()->json($users);
    }
}
