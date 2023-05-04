<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conferencias;
use App\Models\Users;
use Carbon\Carbon;

use App\Mail\EmailConfClaseMailable;
use Illuminate\Support\Facades\Mail;


class ConferenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conferencias = Conferencias::where('status', 1)
            ->orderBy('id')
            ->orderBy('tema')->paginate(5);
        return view('Conferencias.index')->with('conferencias', $conferencias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Users::select('id', 'nombre', 'ap_pat')
            ->where('id_rol', 2)
            ->orderBy('nombre')->get();

        return view('Conferencias.create')
            ->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $hora_inicio = Carbon::parse($datos['hora_inicio'])->format('H:i:s');
        $hora_termino = Carbon::parse($datos['hora_termino'])->format('H:i:s');
        $datos['hora_inicio'] = $hora_inicio;
        $datos['hora_termino'] = $hora_termino;
        Conferencias::create($datos);

        $conferencias = Conferencias::where('status', 1)
            ->orderBy('id')
            ->orderBy('tema')->paginate(5);

        $ultimaCon = Conferencias::latest()->first();

        // Crear una instancia de la vista y pasar los datos
        $rutaVerConferencias = url('/conferencias1');
        // $datos1 = compact('datos', 'rutaVerConferencias');

        $emails = [];

        $users = Users::where('status', 1)->where('id_rol', 3)->get();

        foreach ($users as $user) {
            array_push($emails, $user->email);
        }

        //divide los correos en segmentos
        $chunks = array_chunk($emails, 2);

        // Itera sobre cada trozo y envía los correos electrónicos
        foreach ($chunks as $chunk) {
            foreach ($chunk as $email) {
                Mail::to($email)->send(new EmailConfClaseMailable($ultimaCon,$rutaVerConferencias));
            }
            // Espera 2 segundos antes de enviar el siguiente trozo
            sleep(1);
        }

        return redirect('/conferencias')->with('conferencias', $conferencias);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conferencia = Conferencias::find($id);
        return view('Conferencias.read')->with('conferencia', $conferencia);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $conferencia = Conferencias::find($id);
        $users = Users::select('id', 'nombre', 'ap_pat')
            ->where('id_rol', 2)
            ->orderBy('nombre')->get();
        return view('Conferencias.edit')
            ->with('conferencia', $conferencia)
            ->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $conferencia = Conferencias::find($id);
        $conferencia->update($datos);
        return redirect('/conferencias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Borrado fisico
        //$pais = Paises::find($id);
        //$pais->destroy($id);

        //Borrado lógico
        $conferencia = Conferencias::find($id);
        $conferencia->status = 0;
        $conferencia->save();

        return redirect('/conferencias');
    }
}