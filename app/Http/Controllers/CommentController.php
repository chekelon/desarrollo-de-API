<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Comment;

class CommentController extends Controller
{
    public function mostrarTodos()
    {
        $comentarios=Comment::get();

        return response()->json($comentarios,201);

    }

    public function guardar(Request $request)
    {
        Comment::create($request->all());
        
        return ['created'=>true];
    }

    public function modificar(Request $request, $id)
    {
        $comentorio=Comment::find($id);
        $comentorio->update($request->all());

        return ['modified'=>true];
    }

    public function eliminar($id)
    {
        Comment::destroy($id);

        return ['deleted'=>true];        

    }
    

   
}
