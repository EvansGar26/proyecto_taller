<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Municipios;
use App\Models\Entidades;
use App\Models\Paises;
use Illuminate\Routing\Controller;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipios = Municipios::where('status', 1)->paginate(5);
        return view('Municipios.index')->with('municipios', $municipios);
    }
    // public function index(Request $request)
    // {
    //     $search = $request->input('search');
    //     $municipios = Municipios::where('status', 1)
    //         ->where(function ($query) use ($search) {
    //             $query->where('nombre', 'LIKE', '%' . $search . '%')
    //                 ->orWhereHas('entidades', function ($query) use ($search) {
    //                         $query->where('nombre', 'LIKE', '%' . $search . '%')
    //                             ->orWhereHas('paises', function ($query) use ($search) {
    //                                             $query->where('nombre', 'LIKE', '%' . $search . '%');
    //                                         });
    //                     });
    //         })
    //         ->paginate(5);
    //     return view('Municipios.index')->with('municipios', $municipios);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entidades = Entidades::select('id', 'nombre')
            ->where('status', 1)
            ->orderBy('nombre')->get();
        $paises = Paises::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Municipios.create')
            ->with('entidades', $entidades)
            ->with('paises', $paises);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Municipios::create($datos);
        return redirect('/municipios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $municipio = Municipios::find($id);
        return view('Municipios.read')->with('municipio', $municipio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $municipio = Municipios::find($id);
        $entidades = Entidades::select('id', 'nombre')
            ->where('status', 1)
            ->orderBy('nombre')->get();
        $paises = Paises::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Municipios.edit')
            ->with('municipio', $municipio)
            ->with('entidades', $entidades)
            ->with('paises', $paises);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $municipio = Municipios::find($id);
        $municipio->update($datos);
        return redirect('/municipios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $municipio = Municipios::find($id);
        $municipio->status = 0;
        $municipio->save();
        return redirect('/municipios');
    }
}