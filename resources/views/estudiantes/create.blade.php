@extends('layouts.app')

@section('content')
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 max-w-lg mx-auto">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Registrar Nuevo Estudiante</h2>
        
        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf
            @include('estudiantes._form', ['buttonText' => 'Crear Estudiante'])
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('estudiantes.index') }}" class="text-indigo-600 hover:text-indigo-800 text-sm">← Volver al Listado</a>
        </div>
    </div>
@endsection