<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Directore;
use App\Models\Categoria;
use Illuminate\Http\Request;

class PelisController extends Controller
{
    public function create(){
        
        $director = Directore::all();
        $Categoria = Categoria::all();

        return view('cursos.create', compact('director','Categoria'));
    }

    public function store(Request $request){
        $pelicula = new Pelicula();

        if ($request->hasFile('Imagen')) {
            $imagen = $request->file('Imagen');
            $nombreimagen = time() . '_' . $imagen->getClientOriginalName();
            $ruta = $imagen->storeAs('public/images/peliculas', $nombreimagen);


                $pelicula->titulo = $request->peliculanombre;
            $pelicula->duracion = $request->Duracion;
            $pelicula->sinopsis = $request->sinopsis;
            $pelicula->imagen = $nombreimagen;
            $pelicula->id_categoria = $request->Categoria;
            $pelicula->id_director = $request->Director;

        $pelicula->save();

        return redirect()->route('home');
    
    }
    
}
}