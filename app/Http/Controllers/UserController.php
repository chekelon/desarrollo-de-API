<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class UserController extends Controller
{
    public function usuarios()
    {   
        $usuarios=User::get();

        return response()->json($usuarios,200);
    }
    public function mostrar($id)
    {
        $usuario=User::get()->where('id',$id);

        return response()->json($usuario,200);
    }
    public function guardar(Request $request)
    {
        User::create($request->all());

        return ['created'=>true];
    }
    public function comentarios_usuario($id)
    {
        $comentarios=Comment::get()->where('user_id',$id);

        return response()->json($comentarios,200);
    }
    public function modificar(Request $request,$id)
    {
        $user=User::find($id);
        $user->update($request->all());

        return ['modified'=>true];

    }
    public function eliminar($id)
    {
        User::destroy($id);

        return ['deleted'=>true];

    }
}
