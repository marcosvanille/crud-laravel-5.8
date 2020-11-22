<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::all();
        return view('modelos.index' , compact('modelos'));
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
    public function edit() //Criar
    {
        return view('modelos.edit');
    }
}
