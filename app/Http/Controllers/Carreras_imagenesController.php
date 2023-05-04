<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carreras_imagenes;
use App\Models\Carreras;
use Illuminate\Routing\Controller;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Carreras_imagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras_imagenes = Carreras_imagenes::where('status', 1)->paginate(3);
        return view('Carreras_imagenes.index')->with('carreras_imagenes', $carreras_imagenes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carreras::select('id', 'nombre')
            ->where('status', 1)
            ->orderBy('nombre')->get();
        return view('Carreras_imagenes.create')
            ->with('carreras', $carreras);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = new Carreras_imagenes();
        $datos->carrera_id = $request->id_carrera;

        // Insertar el registro y obtener el ID
        $id = DB::table('carreras_imagenes')->insertGetId(
            ['carrera_id' => $request->id_carrera, 'ruta' => ' ', 'status' => 0, 'created_at' => now(), 'updated_at' => now()]
        );
        if ($request->hasFile("imagen")) {
            $imagen = $request->file("imagen");
            // $nombreImagen = Str::slug($request->id_carrera) ."_".$imagen->getClientOriginalName()."." . $imagen->guessExtension();
            // $nombreImagen = Str::slug($request->id_carrera) . "_" . $imagen->getClientOriginalName();
            $nombreImagen = Str::slug($id) . "_" . Str::slug($request->id_carrera) . "_" . $imagen->getClientOriginalName();
            //Ruta de la imagen que subimos
            $ruta = public_path("images/carreras_imagenes/");
            copy($imagen->getRealPath(), $ruta . $nombreImagen);
            // $datos->ruta = "images/carreras_imagenes/" . $nombreImagen;
            $ruta2 = "images/carreras_imagenes/" . $nombreImagen;
        }

        // $datos->carrera_id = $request->id_carrera;
        $datos->status = $request->status;

        // $datos->save();
        DB::table('carreras_imagenes')
            ->where('id', $id)
            ->update(['ruta' => $ruta2, 'status' => $request->status]);
        return redirect('/carreras_imagenes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}