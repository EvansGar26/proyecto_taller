<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;
use App\Models\Carreras;
use App\Models\Carreras_favoritas;
use Illuminate\Support\Facades\Auth;

class Carreras_favoritasController extends Controller
{
    public function store(Request $request)
    {
        $datos = $request->all();
        Carreras_favoritas::create($datos);

        return response()->json([
            'mensaje' => 'El formulario ha sido enviado correctamente'
        ]);

    }

    public function destroy(Request $request)
    {
        // $id_user = $request->id_user;
        $id_user = Auth::user()->id;
        $id_carrera = $request->id_carrera;
        //Borrado fisico
        $favorita = Carreras_favoritas::where('id_user', $id_user)
            ->where('id_carrera', $id_carrera)->first();
        if ($favorita) {
            $favorita->delete();
        }

        //Borrado lógico
        // $pais = Paises::find($id);
        // $pais->status = 0;
        // $pais->save();

        return response()->json([
            'mensaje' => 'El formulario ha sido enviado correctamente'
        ]);
    }
}