<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carreras;
use Illuminate\Routing\Controller;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carreras::where('status', 1)
            ->orderBy('nombre')->paginate(5);

        return view('Carreras.index')->with('carreras', $carreras);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Carreras::create($datos);
        return redirect('/carreras');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carrera = Carreras::find($id);
        return view('Carreras.read')->with('carrera', $carrera);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carrera = Carreras::find($id);
        return view('Carreras.edit')->with('carrera', $carrera);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $carrera = Carreras::find($id);
        $carrera->update($datos);
        return redirect('/carreras');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Borrado fisico
        //$pais = Paises::find($id);
        //$pais->destroy($id);
        
        //Borrado lógico
        $carrera = Carreras::find($id);
        $carrera->status = 0;
        $carrera->save();
        
        return redirect('/carreras');
    }
}