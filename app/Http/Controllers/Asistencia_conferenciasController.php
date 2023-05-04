<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asistencia_conferencias;
use App\Models\Conferencias;

use Illuminate\Support\Facades\Auth;


class Asistencia_conferenciasController extends Controller
{
    public function agrega(Request $request)
    {

        $conferencias = Conferencias::where('status', 1)
            ->orderBy('id')
            ->orderBy('tema')->get();

        $datos = $request->all();

        $datos['id_user'] = Auth::user()->id;

        $id_user = Auth::user()->id;

        $id_conferencia = $request->id_conferencia;

        $asistencia = Asistencia_conferencias::where('id_user', $id_user)
            ->where('id_conferencia', $id_conferencia)
            ->first();

        if ($asistencia == null) {
            Asistencia_conferencias::create($datos);
        }
        return view('template.conferencias1')->with('mensaje', 'Se ha confirmado la asistencia correctamente')
            ->with('conferencias', $conferencias);
    }
}