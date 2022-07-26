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
        $todos = Todo::all(['id', 'title', 'description', 'category', 'is_complete', 'document']);
        return response()->json($todos);
    }

    // To-do: get path from DB
    /**
     * Gets PDF file.
     */
    public function getDownload()
    {
        //PDF file is stored under project/public/download/BUWOG.pdf
        $file= public_path(). "/download/BUWOG.pdf";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, 'filename.pdf', $headers);
    }
}
