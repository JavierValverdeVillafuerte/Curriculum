<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index()
    {
           // Mostrar todos los registros
    $curriculums = Curriculum::all();
    return view('list', compact('curriculums'));
    }

    public function create()
    {
        return view('partials.form');
    }

    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'datos_personales' => 'required|string',
            'habilidades' => 'required|string',
            'idiomas' => 'required|string',
            'profesion' => 'required|string|max:255',
            'experiencia_profesional' => 'required|string',
            'historial_academico' => 'required|string',
            'formacion_complementaria' => 'nullable|string',
            'otros_datos' => 'nullable|string',
        ]);

        
        Curriculum::create($request->all());

        return redirect()->route('list')->with('success', 'Registro creado exitosamente');
    }

  
    public function edit($id)
{
    // Mostrar el formulario de edición con los datos del registro
    $curriculum = Curriculum::findOrFail($id);
    return view('edit', compact('curriculum'));
}

public function update(Request $request, $id)
{
    // Actualizar un registro existente
    $validatedData = $request->validate([
        'nombre' => 'required',
        'apellidos' => 'required',
        'datos_personales' => 'required',
        // Validar los demás campos según corresponda
    ]);

    $curriculum = Curriculum::findOrFail($id);
    $curriculum->update($validatedData);

    return redirect()->route('list')->with('success', 'Registro actualizado exitosamente.');
}

public function destroy($id)
{
    // Eliminar un registro
    $curriculum = Curriculum::findOrFail($id);
    $curriculum->delete();

    return redirect()->route('list')->with('success', 'Registro eliminado exitosamente.');
}

    public function showForm()
{
    
}


}