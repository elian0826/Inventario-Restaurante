<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa; // Asegúrate de importar el modelo Mesa

class MesaController extends Controller
{
    // Mostrar todas las mesas
    public function index() {
        $mesas = Mesa::all(); // Obtiene todas las mesas de la base de datos
        return view('modules.dashboard.mesas.mesas', compact('mesas')); // Asegúrate de usar la ruta correcta
    }

    // Mostrar el formulario para crear una nueva mesa
    public function create() {
        return view('modules.dashboard.mesas.create'); // Ruta correcta para mostrar el formulario de creación
    }

    // Almacenar una nueva mesa
    public function store(Request $request) {
        // Validación del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'estado' => 'required|string|in:libre,ocupada', // Validar el estado
        ]);

        // Crear una nueva mesa con el estado proporcionado por el formulario
        $mesa = new Mesa();
        $mesa->nombre = $request->input('nombre');
        $mesa->estado = $request->input('estado'); // Guardar el estado proporcionado
        $mesa->save();

        // Redirigir a la lista de mesas después de agregar la nueva
        return redirect()->route('mesas.index')->with('success', 'Mesa agregada exitosamente');
    }

    // Mostrar el formulario para editar una mesa existente
    public function edit($id) {
        $mesa = Mesa::findOrFail($id); // Encuentra la mesa por ID
        return view('modules.dashboard.mesas.edit', compact('mesa')); // Ruta correcta para el formulario de edición
    }

    // Actualizar una mesa existente
    public function update(Request $request, $id) {
        // Validación del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'estado' => 'required|string|in:libre,ocupada', // Validar el estado
        ]);

        $mesa = Mesa::findOrFail($id); // Encuentra la mesa por ID
        $mesa->nombre = $request->input('nombre');
        $mesa->estado = $request->input('estado'); // Actualizar el estado
        $mesa->save();

        // Redirigir a la lista de mesas después de actualizar
        return redirect()->route('mesas.index')->with('success', 'Mesa actualizada exitosamente');
    }

    // Eliminar una mesa
    public function destroy($id) {
        $mesa = Mesa::findOrFail($id); // Encuentra la mesa por ID
        $mesa->delete(); // Elimina la mesa

        // Redirigir a la lista de mesas después de eliminar
        return redirect()->route('mesas.index')->with('success', 'Mesa eliminada exitosamente');
    }
}
