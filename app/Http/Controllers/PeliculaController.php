<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    //
    public function index(){
    // Ordenar las películas por fecha de estreno de más reciente a más antigua
        $peliculas = Pelicula::orderBy('fecha_estreno', 'desc')->get();
        return view('admin.peliculas.index', ['peliculas' => $peliculas]);
    }

    //funcion crear pelicula
    public function create(){
        $peliculas = Pelicula::all();
        return view('admin.peliculas.create' );
    }

    // Función para almacenar información del formulario
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'titulo_pelicula' => 'required|max:255',
            'categoria' => 'required|max:255',
            'resena' => 'required',
            'sinopsis' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha_estreno' => 'required|date',
        ]);

        // Crear una nueva instancia de Pelicula y guardar los datos
        $pelicula = new Pelicula();
        $pelicula->titulo_pelicula = $request->input('titulo_pelicula');
        $pelicula->categoria = $request->input('categoria');
        $pelicula->resena = $request->input('resena');
        $pelicula->sinopsis = $request->input('sinopsis');

        // Guardar el archivo de imagen
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('posters'), $filename);
            $pelicula->poster = $filename;
        }

        $pelicula->fecha_estreno = $request->input('fecha_estreno');
        $pelicula->save();

        // Redirigir a la lista de películas con un mensaje de éxito
        return redirect('/admin/peliculas')->with('success', 'Película guardada con éxito');
    }

    //mostrar dato especifico
    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('admin.peliculas.show', compact('pelicula'));
    }

    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('admin.peliculas.edit', compact('pelicula'));
    }

    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::findOrFail($id);

    // Validar los datos del formulario
        $validatedData = $request->validate([
            'resena' => 'required',
    ]);

    // Actualizar el campo 'resena'
        $pelicula->resena = $request->input('resena');
        $pelicula->save();

    // Redirigir a la lista de películas con un mensaje de éxito
        return redirect('/admin/peliculas')->with('success', 'Película actualizada con éxito');
    }
    
    public function destroy($id)
    {
        // Encuentra la película por su ID
        $pelicula = Pelicula::findOrFail($id);

        // Elimina la película
        $pelicula->delete();

        // Redirige con un mensaje de éxito
        return redirect()->route('peliculas.index')->with('success', 'Película eliminada exitosamente.');
    }
}
