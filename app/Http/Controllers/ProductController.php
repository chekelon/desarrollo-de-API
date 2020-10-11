<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Comment;

class ProductController extends Controller
{
    public function mostrarTodos()
    {

        $productos=Product::get();
      

        return response()->json($productos,201);
    }
   
    public function mostrar($producto)
    {
       
        $producto=Product::get()->where('id',$producto);

        return response()->json($producto,201);

    }
    public function comentarios($producto)
    {
       
        $comentarios=Comment::get()->where('product_id',$producto);

        return response()->json($comentarios,201);

    }

    public function modificar(Request $request,$id)
    {
        $producto=Product::find($id);
        $producto->update($request->all());

        return ['modified'=>true];

    }

    public function eliminar($id)
    {
        Product::destroy($id);

        return ['deleted'=>true]; 

    }
   
}
