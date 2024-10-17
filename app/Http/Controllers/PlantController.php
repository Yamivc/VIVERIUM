<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class PlantController extends Controller
{
    public function index()
    {
        $my_plants = Plant::all();
        return view('my-plants.index', compact('my_plants'));
    }

    public function create()
    {

        return view('my-plants.create');
    }

    public function store(Request $request)
    {
        $plant = new Plant;
        $plant->name = $request->input('name');
        $plant->scientific_name = $request->input('scientific_name');
        $plant->img = $request->input('img');
        $plant->observations = $request->input('observations');
        $plant->save();

        return redirect()->route('my-plants.index');
    }

    public function edit($id)
    {
        $plant = Plant::findOrFail($id); // Busca la planta por su ID
        return view('my-plants.edit', compact('plant')); // Muestra la vista para editar
    }

    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
            'name' => 'required',
            'scientific_name' => 'required',
            'img' => 'required',
            'observations' => 'required',
        ]);

        // Buscar la planta y actualizar sus datos
        $plant = Plant::findOrFail($id);
        $plant->name = $request->input('name');
        $plant->scientific_name = $request->input('scientific_name');
        $plant->img = $request->input('img');
        $plant->observations = $request->input('observations');
        $plant->save();

        return redirect()->route('my-plants.index')->with('success', 'Plant updated successfully!');
    }

    public function destroy($id)
    {
        // Buscar la planta y eliminarla
        $plant = Plant::findOrFail($id);
        $plant->delete();

        return redirect()->route('my-plants.index')->with('success', 'Plant deleted successfully!');
    }
}
