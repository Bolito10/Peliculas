@extends('layaouts.plantilla')

@section('title','CineUTT')

@section('content')
<a href="{{route('peliculas.create')}}" >Añadir pelicula</a>
<div class="flex flex-wrap -mx-2">

    @foreach ($peliculasConRelaciones as $peli)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 px-2 mb-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/peliculas/'.$peli->imagen) }}" alt="{{ $peli->titulo }}">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $peli->titulo }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $peli->sinopsis }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Duración: {{ $peli->duracion }} min.</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $peli->categoria->Categoria }}</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $peli->Director->Director }}</span>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection