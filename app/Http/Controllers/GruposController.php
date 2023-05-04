<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Grupos;
use App\Models\Users;
use Illuminate\Routing\Controller;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grupos = Grupos::where('status', 1)
            ->orderBy('id')->paginate(5);
        return view('Grupos.index')->with('grupos', $grupos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Users::select('id', 'nombre', 'ap_pat')
            ->where('id_rol', 2)
            ->orderBy('nombre')->get();
        return view('Grupos.create')
            ->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Grupos::create($datos);
        return redirect('/grupos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grupo = Grupos::find($id);
        return view('Grupos.read')->with('grupo', $grupo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grupo = Grupos::find($id);
        $users = Users::select('id', 'nombre', 'ap_pat')
            ->where('id_rol', 2)
            ->orderBy('nombre')->get();
        return view('Grupos.edit')
            ->with('grupo', $grupo)
            ->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $grupo = Grupos::find($id);
        $grupo->update($datos);
        return redirect('/grupos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grupo = Grupos::find($id);
        $grupo->status = 0;
        $grupo->save();
        return redirect('/grupos');
    }
}