<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Universidades_imagenes;
use App\Models\Universidades;
use Illuminate\Routing\Controller;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Universidades_imagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universidades_imagenes = Universidades_imagenes::where('status', 1)->paginate(3);
        return view('Universidades_imagenes.index')->with('universidades_imagenes', $universidades_imagenes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universidades = Universidades::select('id', 'nombre')
            ->where('status', 1)
            ->orderBy('nombre')->get();
        return view('Universidades_imagenes.create')
            ->with('universidades', $universidades);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = new Universidades_imagenes();
        $datos->id_universidad = $request->id_universidad;

        // Insertar el registro y obtener el ID
        $id = DB::table('universidades_imagenes')->insertGetId(
            ['id_universidad' => $request->id_universidad, 'ruta' => ' ', 'status' => 0, 'created_at' => now(), 'updated_at' => now()]
        );
        if ($request->hasFile("imagen")) {
            $imagen = $request->file("imagen");
            $nombreImagen = Str::slug($id) . "_" . Str::slug($request->id_universidad) . "_" . $imagen->getClientOriginalName();
            //Ruta de la imagen que subimos
            $ruta = public_path("images/universidades_imagenes/");
            copy($imagen->getRealPath(), $ruta . $nombreImagen);
            // $datos->ruta = "images/universidades_imagenes/" . $nombreImagen;
            $ruta2 = "images/universidades_imagenes/" . $nombreImagen;
        }

        // $datos->id_universidad = $request->id_universidad;
        $datos->status = $request->status;

        // $datos->save();
        DB::table('universidades_imagenes')
            ->where('id', $id)
            ->update(['ruta' => $ruta2, 'status' => $request->status]);
        return redirect('/universidades_imagenes');
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
