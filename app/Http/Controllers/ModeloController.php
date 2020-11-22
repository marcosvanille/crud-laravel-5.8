<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::all();
        return view('modelos.index', compact('modelos'));
    }

    public function create(Request $request) //Criar
    {

        return view('modelos.create');
    }

    public function store(Request $request)
    {
        Modelo::create($request->all());

        return redirect()->route('modelos.index');
    }

    public function edit($id) //Editar
    {
        $modelo = Modelo::find($id);
        return view('modelos.edit', compact('modelo'));
    }

    public function update(Request $request , $id)
    {
        $modelo = Modelo::find($id)->update($request->all());
        return redirect()->route('modelos.index');
    }

    public function delete($id) //destroy para deletar
    {
        $modelo = Modelo::find($id)->delete();
        return redirect()->route('modelos.index');
    }




}
