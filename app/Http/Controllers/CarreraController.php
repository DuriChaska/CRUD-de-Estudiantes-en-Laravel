<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera; 
use Illuminate\Validation\Rule;

class CarreraController extends Controller
{
   
    public function index()
    {
        $carreras = Carrera::all(); 
        return view('carreras.index', compact('carreras')); 
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:carreras,nombre', 
        ]);

        Carrera::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('carreras.index')->with('success', 'Carrera creada correctamente.');
    }

    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.edit', compact('carrera'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => [
                'required', 
                'string', 
                'max:255', 
                Rule::unique('carreras', 'nombre')->ignore($id),
            ],
        ]);

        $carrera = Carrera::findOrFail($id);
        $carrera->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('carreras.index')->with('success', 'Carrera actualizada correctamente.');
    }


   public function delete($id) 
    {
        $carrera = Carrera::findOrFail($id);
        $carrera->delete();

        return redirect()->route('carreras.index')->with('success', 'Carrera eliminada correctamente.');
    }
}