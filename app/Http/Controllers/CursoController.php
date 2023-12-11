<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //principal
    public function index(){
        $cursos = Categoria::all();
        return $cursos;
        return view('cursos.index');
    }
    //crear
    public function create(){
        return view('cursos.create');
    }
    //mostrar 
    public function show($curso){
        return view('cursos.show', ['curso' => $curso]);
    }
}
