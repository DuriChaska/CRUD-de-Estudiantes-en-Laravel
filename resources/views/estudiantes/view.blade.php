@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $estudiante->nombre }}</h1>
        <p class="text-sm text-gray-500">Detalles completos del estudiante</p>
        <p class="font-semibold mb-4">Nombre: <span>{{ $estudiante->nombre }}</span></p>
        <p class="font-semibold mb-4">Correo: <span>{{ $estudiante->correo }}</span></p>
        <p class="font-semibold mb-4">Carrera: <span>{{ $estudiante->carrera->nombre ?? 'N/A' }}</span></p>
        <p class="font-semibold mb-4">Semestre: <span>{{ $estudiante->semestre }}</span></p>
        <div class="flex justify-end space-x-3 mt-8">
            <a href="{{ route('estudiantes.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium px-4 py-2 rounded transition duration-150">Volver al Listado</a>
            <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded transition duration-150">Editar</a>
        </div>
    </div>
@endsection