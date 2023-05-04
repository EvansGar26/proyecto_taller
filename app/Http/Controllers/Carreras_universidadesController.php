<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carreras_universidades;
use App\Models\Universidades;
use App\Models\Carreras;
use Illuminate\Routing\Controller;

class Carreras_universidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $carreras_universidades = Carreras_universidades::where('status', 1)
        //     ->orderBy('id')->get();
        // return view('Carreras_universidades.index')->with('carreras_universidades', $carreras_universidades);

        $carreras = Carreras_universidades::orderBy('id_universidad')->paginate(10);
        // $universidades = Universidades::where('status', 1)->orderBy('nombre')->get();

        return view('Carreras_universidades.index')->with('carreras', $carreras);
            // ->with('universidades', $universidades);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carreras::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $universidades = Universidades::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Carreras_universidades.create')
            ->with('carreras', $carreras)
            ->with('universidades', $universidades);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $carreras_seleccionadas = $request->input('carreras_seleccionadas');
        // $carreras_seleccionadas es un array con los valores de los checkboxes seleccionados
        foreach ($carreras_seleccionadas as $carrera){
            $datos['id_carrera'] = $carrera;
            Carreras_universidades::create($datos);
        }
        return redirect('/carreras_universidades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carrera_universidad = Carreras_universidades::find($id);
        return view('Carreras_universidades.read')->with('carrera_universidad', $carrera_universidad);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carrera_universidad = Carreras_universidades::find($id);
        $carreras = Carreras::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $universidades = Universidades::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Carreras_universidades.edit')
            ->with('carrera_universidad', $carrera_universidad)
            ->with('carreras', $carreras)
            ->with('universidades', $universidades);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $carrera_universidad = Carreras_universidades::find($id);
        $carrera_universidad->update($datos);
        return redirect('/carreras_universidades');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carrera_universidad = Carreras_universidades::find($id);
        // $carrera_universidad->status = 0;
        $carrera_universidad->save();
        return redirect('/carreras_universidades');
    }
}