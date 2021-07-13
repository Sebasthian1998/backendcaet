<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function crear(Request $request){
        $autor = new Autor;
        $autor->nombre = $request->nombre;
        $autor->texto = $request->texto;
        $autor->save();
        return '200';
    }

    public function obtenerTodos(Request $request){
        return Autor::all();
    }

    public function obtener(Request $request,int $id){
        $autor = Autor::where('id',$id)->get();
        return $autor;
    }

    public function eliminar(Request $request,int $id){
        $autor = Autor::find($id);
        $autor->delete();
        return '200';
    }

    public function actualizar(Request $request,int $id){
        $autor = Autor::find($id);
        $autor->nombre = $request->nombre;
        $autor->texto = $request->texto;
        $autor->save();
        return '200';
    }
}
