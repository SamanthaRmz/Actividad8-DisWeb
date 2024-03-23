<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller {
    //Método para mostrar todos los superhéroes
    public function index() {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    //Método para mostrar el formulario de creación de un nuevo superhéroe
    public function create() {
        return view('superheroes.create');
    }

    //Método para almacenar un nuevo superhéroe en la base de datos
    public function store(Request $request) {
    //Valida los datos del formulario
    $request->validate([
        'real_name' => 'required|string',
        'superhero_name' => 'required|string',
        'photo_url' => 'required|url',
        'additional_info' => 'nullable|string',
    ]);

    //Crea un nuevo superhéroe en la base de datos
    $superhero = new Superhero();
        $superhero->real_name = $request->input('real_name');
        $superhero->superhero_name = $request->input('superhero_name');
        $superhero->photo_url = $request->input('photo_url');
        $superhero->additional_info = $request->input('additional_info');
    $superhero->save();


    // Redirecciona a la página de inicio o a la página de detalles del superhéroe recién creado
    return redirect()->route('superheroes.index');
}


    //Método para mostrar los detalles de un superhéroe específico
    public function show(Superhero $superhero) {
        return view('superheroes.show', compact('superhero'));
    }

    //Método para mostrar el formulario de edición de un superhéroe
    public function edit(Superhero $superhero) {
        return view('superheroes.edit', compact('superhero'));
    }

    //Método para actualizar un superhéroe en la base de datos
    public function update(Request $request, Superhero $superhero) {
        //Valida los datos del formulario
        $request->validate([
            'real_name' => 'required|string',
            'superhero_name' => 'required|string',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable|string',
        ]);

        //Actualiza el superhéroe con los datos del formulario
        $superhero->update([
            'real_name' => $request->input('real_name'),
            'superhero_name' => $request->input('superhero_name'),
            'photo_url' => $request->input('photo_url'),
            'additional_info' => $request->input('additional_info'),
        ]);

        //Redirecciona a la página de inicio o a la página de detalles del superhéroe actualizado
        return redirect()->route('superheroes.index');
    }

    //Método para eliminar un superhéroe de la base de datos
    public function destroy(Superhero $superhero) {
        //Elimina el superhéroe de la base de datos
        $superhero->delete();

        //Redirecciona a la página de inicio
        return redirect()->route('superheroes.index');
    }
}
