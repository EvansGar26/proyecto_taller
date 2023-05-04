<?php

namespace App\Http\Controllers;

use App\Models\Carreras_universidades;
use App\Models\Universidades_imagenes;
use Illuminate\Http\Request;

use App\Models\Carreras;
use App\Models\Carreras_imagenes;

use Illuminate\Support\Facades\Auth;
use App\Models\Carreras_favoritas;


class TecnoController extends Controller
{
    public function index()
    {
        $carreras = Carreras::where('status', 1)
            ->where('tipo', 1)
            ->orderBy('nombre')->get();

        $carreraSeleccionada = null;
        return view('template.tecnologias', [
            'carreras' => $carreras,
            'carreraSeleccionada' => $carreraSeleccionada,
        ]);
    }

    public function selecciona(Request $request)
    {
        $id_user = Auth::id();

        $carreras = Carreras::where('status', 1)
            ->where('tipo', 1)
            ->orderBy('nombre')
            ->get();

        // foreach ($carreras as $carrera) {
        $imagenes = Carreras_imagenes::where('status', 1)
            ->where('carrera_id', $request->carrera)
            ->get();

        $carreraSeleccionada = null;
        if ($request->filled('carrera')) {
            $carreraSeleccionada = Carreras::findOrFail($request->input('carrera'));
        }

        //Se agregó esto, busca las universidades y sus imagenes
        $universidades = Carreras_universidades::where('id_carrera', $carreraSeleccionada->id)
            ->get();

        $ids_universidades = [];

        foreach ($universidades as $universidad) {
            array_push($ids_universidades, $universidad->id_universidad);
        }

        $img_universidades = Universidades_imagenes::whereIn('id_universidad', $ids_universidades)->get();
        
        // dd($img_universidades); 

        $favorita = Carreras_favoritas::where('id_carrera', $carreraSeleccionada->id)->where('id_user', $id_user)->first();

        $bandera = false;

        if ($favorita) {
            $bandera = true;
        }

        return view('template.tecnologias', [
            'carreras' => $carreras,
            'carreraSeleccionada' => $carreraSeleccionada,
            'imagenes' => $imagenes,
            'id_user' => $id_user,
            'universidades' => $universidades,
            'img_universidades' => $img_universidades,
            'favorita' => $bandera,
        ]);
    }
}