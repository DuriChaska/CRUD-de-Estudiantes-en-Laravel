<div class="space-y-4">
    <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre de la Carrera</label>
        <input type="text" name="nombre" id="nombre" 
               value="{{ old('nombre', $carrera->nombre ?? '') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('nombre') border-red-500 @enderror" 
               required>
        @error('nombre')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-6">
    <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">
        {{ $buttonText ?? 'Guardar Carrera' }}
    </button>
</div>