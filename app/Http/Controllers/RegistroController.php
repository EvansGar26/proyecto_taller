<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use App\Models\Users;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required|string|max:255',
        //     'ap_pat' => 'required|string|max:255',
        //     'ap_mat' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'telefono' => 'required|string|min:10|max:10|unique:users',
        //     'username' => 'required|string|min:1|max:100|unique:users',
        //     // 'fecha_naci' => 'required|date|max:255',
        // ]);

        // $user = new Users([
        //     'nombre' => $request->nombre,
        //     'ap_pat' => $request->ap_pat,
        //     'ap_mat' => $request->ap_mat,
        //     'email' => $request->email,
        //     'telefono' => $request->telefono,
        //     'username' => $request->username,
        //     'rol' => 1,
        //     'password' => bcrypt($request->password),
        // ]);
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'min:5', 'max:35', 'unique:users',  ],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users','regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/'],
            'password' => ['required', 'string', 'min:8', 'max:255', 'unique:users'],
            'telefono' => ['required', 'string', 'min:10', 'max:10'],
            'nombre' => ['required', 'string', 'min:1', 'max:80'],
            'ap_pat' => ['required', 'string', 'min:1', 'max:80'],
            'ap_mat' => ['required', 'string', 'min:1', 'max:80'],
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('registro')->with('errors', $errors);
        }

        $datos = $request->all();

        // $user->save();
        $datos['direccion'] = '';
        $datos['cp'] = 0;
        $datos['colonia'] = '';
        $datos['id_rol'] = 3;
        $datos['id_municipio'] = 3;
        $datos['status'] = 1;

        $datos['password'] = Hash::make($request->password);

        $user = Users::create($datos);

        Auth::login($user);

        return redirect('index');
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