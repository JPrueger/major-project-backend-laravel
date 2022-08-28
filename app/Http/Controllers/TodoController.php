<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Response;

class TodoController extends Controller
{
    /**
     * Gets all Todos.
     */
    public function getAllTodos() {
        $todos = Todo::all(['id', 'title', 'description', 'category', 'is_complete']);
        return response()->json($todos);
    }
}
