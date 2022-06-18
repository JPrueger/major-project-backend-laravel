<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Gets all users.
     */
    public function getAllUsers() {
        $users = User::all(['id', 'name']);
        return response()->json($users);
    }

}
