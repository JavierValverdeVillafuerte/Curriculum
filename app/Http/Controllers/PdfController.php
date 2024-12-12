<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;



use Illuminate\Http\Request;

class PdfController extends Controller
{
    

    public function generatePdf($id)
    {
        // Busca el currículum con el ID proporcionado
        $curriculum = Curriculum::findOrFail($id);
    
        // Asegúrate de que los datos correctos se pasen a la vista
        $data = [
            'nombre' => $curriculum->nombre,
            'apellidos' => $curriculum->apellidos,
            'datos_personales' => $curriculum->datos_personales,
            'habilidades' => $curriculum->habilidades,
            'idiomas' => $curriculum->idiomas,
            'profesion' => $curriculum->profesion,
            'experiencia_profesional' => $curriculum->experiencia_profesional,
            'historial_academico' => $curriculum->historial_academico,
            'formacion_complementaria' => $curriculum->formacion_complementaria,
            'otros_datos' => $curriculum->otros_datos,
        ];
    
        // Generar el PDF con los datos
        $pdf = PDF::loadView('vistaPDF', $data);
    
        // Devolver el archivo PDF al navegador
        return $pdf->stream();
    }
    
}