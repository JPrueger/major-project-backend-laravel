<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Gets all Todos.
     */
    public function getAllTodos() {
        $todos = Todo::all(['title', 'description', 'category', 'is_complete']);
        return response()->json($todos);
    }
}
