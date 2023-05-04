<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carreras_favoritas;
use App\Models\Asistencia_conferencias;
use App\Models\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

// use App\Models\;

class PerfilController extends Controller
{
    public function datos(Request $request)
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            // hacer algo con el id del usuario
        } else {
            // el usuario no ha iniciado sesión
        }
        $usuario = Users::find($id);

        $currentUrl = $request->url();

        return view('Perfil.datos')->with('usuario', $usuario)
            ->with('currentUrl', $currentUrl);
    }

    public function actualiza(Request $request)
    {

        $currentUrl = $request->url();

        $id = Auth::user()->id;

        $validator = Validator::make($request->all(), [
            // 'password' => ['required', 'string', 'min:8', 'max:255'],
            'telefono' => ['required', 'string', 'min:10', 'max:10'],
            'nombre' => ['required', 'string', 'min:1', 'max:80'],
            'ap_pat' => ['required', 'string', 'min:1', 'max:80'],
            'ap_mat' => ['required', 'string', 'min:1', 'max:80'],
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('Perfil.datos')->with('errors', $errors)->with('currentUrl', $currentUrl);
        }

        if ($request->colonia === null) {
            $colonia = '';
        } else {
            $colonia = $request->colonia;
        }

        if ($request->direccion == null) {
            $direccion = '';
        } else {
            $direccion = $request->direccion;
        }

        if ($request->cp == null) {
            $cp = '';
        } else {
            $cp = $request->cp;
        }

        $user = Users::find($id);
        $user->nombre = $request->nombre;
        $user->ap_pat = $request->ap_pat;
        $user->ap_mat = $request->ap_mat;
        $user->cp = $cp;
        $user->telefono = $request->telefono;
        $user->colonia = $colonia;
        $user->direccion = $direccion;
        // $user->update($datos);
        $user->save();

        return view('Perfil.perfil')->with('currentUrl', $currentUrl);
    }


    public function conferencias(Request $request)
    {
        $id = Auth::user()->id;
        $conferencias = Asistencia_conferencias::where('id_user', $id)->get();

        $currentUrl = $request->url();

        return view('Perfil.asistencia')->with('conferencias', $conferencias)->with('currentUrl', $currentUrl);
    }


    public function carreras(Request $request)
    {
        $id = Auth::user()->id;

        $carreras = Carreras_favoritas::where('id_user', $id)->get();

        $currentUrl = $request->url();

        return view('Perfil.carreras')->with('carreras', $carreras)->with('currentUrl', $currentUrl);
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

        $carreras = null;

        $currentUrl = null;
        // $currentUrl = $request->url();

        return view('Perfil.carreras')->with('carreras', $carreras)->with('currentUrl', $currentUrl);
    }
}