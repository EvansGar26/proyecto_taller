<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;
use App\Models\Paises;
use App\Models\Municipios;
use App\Models\Entidades;
use App\Models\Roles;
// use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::where('status', 1)
            ->orderBy('id')->paginate(5);

        return view('Users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Roles::select('id', 'nombre');
        $municipios = Municipios::select('id', 'nombre')
            ->where('status', 1)
            ->orderBy('nombre')->get();
        $entidades = Entidades::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $paises = Paises::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Users.create')
            ->with('roles', $roles)
            ->with('municipios', $municipios)
            ->with('entidades', $entidades)
            ->with('paises', $paises);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'min:5', 'max:35', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:255', 'unique:users'],
            'telefono' => ['required', 'string', 'min:10', 'max:10'],
            'nombre' => ['required', 'string', 'min:1', 'max:80'],
            'ap_pat' => ['required', 'string', 'min:1', 'max:80'],
            'ap_mat' => ['required', 'string', 'min:1', 'max:80'],
        ]);

        // if ($validator->fails()) {
        //     return redirect('/registro')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $datos = $request->all();
        $datos['password'] = Hash::make($request->password);
        Users::create($datos);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Users::find($id);
        return view('Users.read')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Users::find($id);
        $roles = Roles::select('id', 'nombre');
        $municipios = Municipios::select('id', 'nombre')
            ->where('status', 1)
            ->orderBy('nombre')->get();
        $entidades = Entidades::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $paises = Paises::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('Users.edit')->with('user', $user)
            ->with('roles', $roles)
            ->with('municipios', $municipios)
            ->with('entidades', $entidades)
            ->with('paises', $paises);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $user = Users::find($id);
        $datos['password'] = Hash::make($request->password);
        $user->update($datos);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Borrado lógico
        $user = Users::find($id);
        $user->status = 0;
        $user->save();

        return redirect('/users');
    }
}