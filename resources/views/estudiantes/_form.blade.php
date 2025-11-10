<div class="space-y-4">
    <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" name="nombre" id="nombre" 
               value="{{ old('nombre', $estudiante->nombre ?? '') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('nombre') border-red-500 @enderror" 
               required>
        @error('nombre')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="correo" class="block text-sm font-medium text-gray-700">Correo</label>
        <input type="email" name="correo" id="correo" 
               value="{{ old('correo', $estudiante->correo ?? '') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('correo') border-red-500 @enderror" 
               required>
        @error('correo')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="semestre" class="block text-sm font-medium text-gray-700">Semestre</label>
        <input type="text" name="semestre" id="semestre" 
               value="{{ old('semestre', $estudiante->semestre ?? '') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('semestre') border-red-500 @enderror" 
               required>
        @error('semestre')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="carrera_id" class="block text-sm font-medium text-gray-700">Carrera</label>
        <select name="carrera_id" id="carrera_id" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('carrera_id') border-red-500 @enderror" 
                required>
            <option value="">Selecciona una Carrera</option>
            @foreach ($carreras as $carrera)
                <option value="{{ $carrera->id }}" 
                    {{ old('carrera_id', $estudiante->carrera_id ?? '') == $carrera->id ? 'selected' : '' }}>
                    {{ $carrera->nombre }}
                </option>
            @endforeach
        </select>
        @error('carrera_id')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-6">
    <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">
        {{ $buttonText ?? 'Guardar Estudiante' }}
    </button>
</div>