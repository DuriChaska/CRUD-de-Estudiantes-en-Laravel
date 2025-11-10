@extends('layouts.app')

@section('content')
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 max-w-lg mx-auto">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Editar Carrera: {{ $carrera->nombre }}</h2>
        
        <form action="{{ route('carreras.update', $carrera) }}" method="POST">
            @csrf
            @method('PUT')
            
            @include('carreras._form', ['carrera' => $carrera, 'buttonText' => 'Actualizar Carrera'])
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('carreras.index') }}" class="text-indigo-600 hover:text-indigo-800 text-sm">← Volver al Listado de Carreras</a>
        </div>
    </div>
@endsection