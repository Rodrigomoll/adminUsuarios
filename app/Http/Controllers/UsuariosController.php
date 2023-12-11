<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuarios::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuarios();
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->correoElectronico = $request->correoElectronico;
        $usuario->fechaRegistro = $request->fechaRegistro;
        $usuario -> save();
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Usuarios::find($id);
        return response()->json($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::find($id);
        $usuario -> nombres = $request -> nombres;
        $usuario -> apellidos = $request -> apellidos;
        $usuario -> correoElectronico = $request -> correoElectronico;
        $usuario -> fechaRegistro = $request -> fechaRegistro;
        $usuario -> save();

        return 'Usuario actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuarios::find($id);
        $usuario -> delete();

        return 'Usuario eliminado correctamente';
    }
}
