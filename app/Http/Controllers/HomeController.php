<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Directore;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pelicula = Pelicula::all();
        $director = Directore::all();
        $Categoria = Categoria::all();

        $peliculasConRelaciones = Pelicula::with(['director','categoria'])->get();

        return view('home', compact('peliculasConRelaciones'));
        
    }
    public function indexapi()
    {
        
        $peliculasConRelaciones = Pelicula::with(['director','categoria'])->get();
        return response()->json($peliculasConRelaciones);
        
    }
}
