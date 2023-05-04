<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carreras_favoritas;
use App\Models\Carreras;

use App\Models\Asistencia_conferencias;
use App\Models\Conferencias;

class GraficasController extends Controller
{
    public function carreras()
    {
        //Para tecnologias
        $cantidad = [];

        $nombres_Aux = [];

        $carreras = Carreras::where('tipo',1)->get();

        $num_con = 1;

        foreach ($carreras as $carrera) {
            $str = "Carrera " . $num_con;
            array_push($nombres_Aux, $str);
            $contador = Carreras_favoritas::where('id_carrera', $carrera->id)->count();
            array_push($cantidad, $contador);
            $num_con = $num_con + 1;
        }

        //Para ciencias
        $cantidad2 = [];

        $nombres_Aux2 = [];

        $carreras2 = Carreras::where('tipo',0)->get();

        $num_con = 1;

        foreach ($carreras2 as $carrera) {
            $str = "Carrera " . $num_con;
            array_push($nombres_Aux2, $str);
            $contador = Carreras_favoritas::where('id_carrera', $carrera->id)->count();
            array_push($cantidad2, $contador);
            $num_con = $num_con + 1;
        }


        $datos = [
            'nombres_carreras' => $nombres_Aux,
            'cantidad' => $cantidad,
            'nombres_carreras2' => $nombres_Aux2,
            'cantidad2' => $cantidad2
        ];

        return response()->json($datos);
    }

    public function carrerasVista()
    {
        $nombres_carreras = [];

        $carreras = Carreras::where('tipo',1)->get();

        $num_con = 1;

        foreach ($carreras as $carrera) {
            $str = "Carrera " . $num_con . ": " . $carrera->nombre;
            array_push($nombres_carreras, $str);
            $num_con = $num_con + 1;
        }

        $nombres_carreras2 = [];

        $carreras2 = Carreras::where('tipo',0)->get();

        $num_con = 1;

        foreach ($carreras2 as $carrera) {
            $str = "Carrera " . $num_con . ": " . $carrera->nombre;
            array_push($nombres_carreras2, $str);
            $num_con = $num_con + 1;
        }
        
        return view('Graficas.graficaCarreras')->with('carreras', $nombres_carreras)->with('carreras2', $nombres_carreras2);
    }

    public function conferencias()
    {
        $tema_Aux = [];
        $cantidad = [];

        $conferencias = Conferencias::all();

        $num_con = 1;

        foreach ($conferencias as $conferencia) {
            $str = "Con " . $num_con;
            array_push($tema_Aux, $str);
            $contador = Asistencia_conferencias::where('id_conferencia', $conferencia->id)->count();
            array_push($cantidad, $contador);
            $num_con = $num_con + 1;
        }

        $datos = [
            'tema' => $tema_Aux,
            'cantidad' => $cantidad
        ];

        return response()->json($datos);
    }

    public function conferenciasVista()
    {
        $tema_conferencias = [];

        $conferencias = Conferencias::all();

        $num_con = 1;

        foreach ($conferencias as $conferencia) {
            $str = "Con " . $num_con . ": " . $conferencia->tema;
            // array_push($tema_conferencias, $conferencia->tema);
            array_push($tema_conferencias, $str);
            $num_con = $num_con + 1;
        }
        
        return view('Graficas.graficaConferencias')->with('temasCon', $tema_conferencias);
    }

}