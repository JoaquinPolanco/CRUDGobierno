<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();
    
        if ($proyectos->isEmpty()) {
            // Manejar el caso en el que no hay proyectos
            // Por ejemplo, puedes retornar un mensaje o redirigir a otra vista.
        }
    
        return view('proyectos.index', compact('proyectos'));
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.agregar');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Valida los datos del formulario
    $request->validate([
        'NombreProyecto' => 'required',
        'fuenteFondos' => 'required',
        'MontoPlanificado' => 'required',
        'MontoPatrocinado' => 'required',
        'MontoFondosPropios' => 'required',
    ]);

    // Crea un nuevo proyecto en la base de datos
    $proyecto = new Proyecto([
        'NombreProyecto' => $request->input('NombreProyecto'),
        'fuenteFondos' => $request->input('fuenteFondos'),
        'MontoPlanificado' => $request->input('MontoPlanificado'),
        'MontoPatrocinado' => $request->input('MontoPatrocinado'),
        'MontoFondosPropios' => $request->input('MontoFondosPropios'),
    ]);

    $proyecto->save();

    // Redirige de regreso a la página de proyectos o a donde desees
    return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos.editar', compact('proyecto'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'NombreProyecto' => 'required',
            'fuenteFondos' => 'required',
            'MontoPlanificado' => 'required',
            'MontoPatrocinado' => 'required',
            'MontoFondosPropios' => 'required',
        ]);
    
        $proyecto = Proyecto::find($id);
    
        $proyecto->update([
            'NombreProyecto' => $request->input('NombreProyecto'),
            'fuenteFondos' => $request->input('fuenteFondos'),
            'MontoPlanificado' => $request->input('MontoPlanificado'),
            'MontoPatrocinado' => $request->input('MontoPatrocinado'),
            'MontoFondosPropios' => $request->input('MontoFondosPropios'),
        ]);
    
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encuentra el proyecto que deseas eliminar por su ID
        $proyecto = Proyecto::find($id);
    
        if (!$proyecto) {
            // Maneja el caso en el que el proyecto no se encuentre
            return redirect()->route('proyectos.index')->with('error', 'El proyecto no se encontró');
        }
    
        // Elimina el proyecto de la base de datos
        $proyecto->delete();
    
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente');
    }
}
