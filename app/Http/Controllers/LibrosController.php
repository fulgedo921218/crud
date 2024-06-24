<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Models\Libros as libro; // Importación del modelo Libro

class LibrosController extends Controller
{
    // Mostrar todos los libros paginados
    public function index()
    {
        $libros = Libro::paginate(5); // Obtener todos los libros paginados

        return response()->json($libros); // Devolver respuesta JSON con los libros paginados
    }

    // Crear un nuevo libro
    public function store(CreateLibroRequest $request)
    {
        $validatedData = $request->validated(); // Validar los datos de la solicitud usando las reglas definidas en CreateLibroRequest

        $libro = Libro::create($validatedData); // Crear un nuevo libro con los datos validados
        return response()->json($libro, 201); // Devolver respuesta JSON con el libro creado y código de estado 201 (creado)
    }

    // Mostrar un libro específico por su ID
    public function show($id)
    {
        $libro = Libro::find($id); // Buscar un libro por su ID

        if ($libro) {
            return response()->json($libro); // Devolver respuesta JSON con el libro encontrado
        } else {
            return response()->json(['message' => 'Libro not found'], 404); // Devolver respuesta JSON con mensaje de error si el libro no se encuentra
        }
    }

    // Actualizar un libro existente por su ID
    public function update(UpdateLibroRequest $request, $id)
    {
        $libro = Libro::find($id); // Buscar un libro por su ID

        if ($libro) {
            $validatedData = $request->validated(); // Validar los datos de la solicitud usando las reglas definidas en UpdateLibroRequest

            $libro->update($validatedData); // Actualizar el libro con los datos validados
            return response()->json($libro); // Devolver respuesta JSON con el libro actualizado
        } else {
            return response()->json(['message' => 'Libro not found'], 404); // Devolver respuesta JSON con mensaje de error si el libro no se encuentra
        }
    }

    // Eliminar un libro por su ID
    public function destroy($id)
    {
        $libro = Libro::find($id); // Buscar un libro por su ID

        if ($libro) {
            $libro->delete(); // Eliminar el libro encontrado
            return response()->json(['message' => 'Libro deleted successfully']); // Devolver respuesta JSON con mensaje de éxito
        } else {
            return response()->json(['message' => 'Libro not found'], 404); // Devolver respuesta JSON con mensaje de error si el libro no se encuentra
        }
    }
}
