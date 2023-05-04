<?php

namespace App\Http\Controllers;

use App\Models\Municipios;
use Illuminate\Http\Request;

use App\Models\Universidades;
use Illuminate\Routing\Controller;

class UniversidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universidades = Universidades::where('status', 1)
            ->orderBy('nombre')->paginate(5);

        return view('Universidades.index')->with('universidades', $universidades);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipios = Municipios::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Universidades.create')
            ->with('municipios', $municipios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Universidades::create($datos);
        return redirect('/universidades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $universidad = Universidades::find($id);
        return view('Universidades.read')->with('universidad', $universidad);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $universidad = Universidades::find($id);
        $municipios = Municipios::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Universidades.edit')
            ->with('universidad', $universidad)
            ->with('municipios', $municipios);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $universidad = Universidades::find($id);
        $universidad->update($datos);
        return redirect('/universidades');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $universidad = Universidades::find($id);
        $universidad->status = 0;
        $universidad->save();
        return redirect('/universidades');
    }
}