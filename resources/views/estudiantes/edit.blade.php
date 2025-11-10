@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4 text-center text-gray-800">✏️ Editar Estudiante</h1>
<div class="max-w-xl mx-auto bg-white shadow-2xl rounded-xl p-6 border border-gray-100">
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre" class="block font-medium text-gray-700 mb-1">Nombre</label>
            <input type="text" name="nombre" id="nombre" 
                   value="{{ old('nombre', $estudiante->nombre) }}" 
                   required
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500 @error('nombre') border-red-500 @enderror">
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="correo" class="block font-medium text-gray-700 mb-1">Correo electrónico</label>
            <input type="email" name="correo" id="correo" 
                   value="{{ old('correo', $estudiante->correo) }}"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500 @error('correo') border-red-500 @enderror">
            @error('correo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="semestre" class="block font-medium text-gray-700 mb-1">Semestre</label>
            <input type="text" name="semestre" id="semestre" 
                   value="{{ old('semestre', $estudiante->semestre) }}" 
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500 @error('semestre') border-red-500 @enderror">
            @error('semestre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="carrera_id" class="block font-medium text-gray-700 mb-1">Carrera</label>
            <select name="carrera_id" id="carrera_id" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-500 @error('carrera_id') border-red-500 @enderror">
                <option value="">-- Seleccione una Carrera --</option>
                @foreach ($carreras as $carrera)
                    <option value="{{ $carrera->id }}" 
                            @selected(old('carrera_id', $estudiante->carrera_id) == $carrera->id)>
                        {{ $carrera->nombre }}
                    </option>
                @endforeach
            </select>
            @error('carrera_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end pt-4 space-x-3">
            <a href="{{ route('estudiantes.index')}}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 transition duration-150 shadow-md">Cancelar</a>
            <button type="submit" class="bg-sky-600 text-white px-4 py-2 rounded hover:bg-sky-700 transition duration-150 shadow-md">Actualizar Estudiante</button>
        </div>
    </form>
</div>
@endsection