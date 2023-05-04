<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conferencias_grupos;
use App\Models\Grupos;
use App\Models\Conferencias;
use Illuminate\Routing\Controller;

class Conferencias_gruposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conferencias_grupos = Conferencias_grupos::where('status', 1)
            ->orderBy('id')->get();
        return view('Conferencias_grupos.index')->with('conferencias_grupos', $conferencias_grupos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $conferencias = Conferencias::select('id', 'tema')
            ->orderBy('tema')->get();
        $grupos = Grupos::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Entidades.create')
            ->with('conferencias', $conferencias)
            ->with('grupos', $grupos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Conferencias_grupos::create($datos);
        return redirect('/conferencias_grupos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conferencia_grupo = Conferencias_grupos::find($id);
        return view('Conferencias_grupos.read')->with('conferencia_grupo', $conferencia_grupo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $conferencia_grupo = Conferencias_grupos::find($id);
        $conferencias = Conferencias::select('id','tema')
                  ->orderBy('tema')->get();
        $grupos = Grupos::select('id','nombre')
                  ->orderBy('nombre')->get();           
        return view('Conferencias_grupos.edit')
               ->with('conferencia_grupo', $conferencia_grupo)
               ->with('conferencias',$conferencias)
               ->with('grupos',$grupos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $conferencia_grupo = Conferencias_grupos::find($id);
        $conferencia_grupo->update($datos);
        return redirect('/conferencias_grupos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $conferencia_grupo = Conferencias_grupos::find($id);
        // $conferencia_grupo->status = 0;
        $conferencia_grupo->save();
        return redirect('/conferencias_grupos');
    }
}