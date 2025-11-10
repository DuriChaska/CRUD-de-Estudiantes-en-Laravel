<?php

namespace App\Http\Controllers;

use App\Models\Estudiante; 
use App\Models\Carrera; 
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::with('carrera')->latest()->get();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        $carreras = Carrera::all();
        return view('estudiantes.create', compact('carreras'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:150',
            'correo' => 'required|email|unique:estudiantes,correo|max:255', 
            'semestre' => 'required|string|max:50',
            'carrera_id' => 'required|exists:carreras,id', 
        ], [
            'carrera_id.required' => 'La carrera es obligatoria.',
            'correo.unique' => 'Este correo ya está registrado.',
        ]);

        Estudiante::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'semestre' => $request->semestre,
            'carrera_id' => $request->carrera_id,
        ]);

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante registrado correctamente.');
    }

    public function edit(Estudiante $estudiante) 
    {
        $carreras = Carrera::all();
        return view('estudiantes.edit', compact('carreras', 'estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required|string|max:150',
            'correo' => ['required', 'email', 'max:255', Rule::unique('estudiantes', 'correo')->ignore($estudiante->id)],
            'semestre' => 'required|string|max:50',
            'carrera_id' => 'required|exists:carreras,id',
        ]);
        
        $estudiante->update([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'semestre' => $request->semestre,
            'carrera_id' => $request->carrera_id,
        ]);

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado correctamente.');
    }
    
   public function delete($id) 
    {
        $estudiante = Estudiante::findOrFail($id); 
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente.');
    }

    public function show($id){
        $estudiante = Estudiante::with('carrera')->findOrFail($id);
        return view('estudiantes.view', compact('estudiante')); 
    }
}