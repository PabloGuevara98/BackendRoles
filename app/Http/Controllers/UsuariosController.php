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
        //
        $datos['usuarios']=Usuarios::paginate(5);
        return view('usuario.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recolectar los datos e insertarlos en el modelo
        $datosUsuario = request()->except('_token');
        //
        Usuarios::insert($datosUsuario);

        //return response()->json($datosUsuario);
        return redirect('usuario')->with('mensaje', 'Usuario agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $usuario = Usuarios::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario = request()->except(['_token','_method']);
        Usuarios::where('id',$id)->update($datosUsuario);

        $usuario=Usuarios::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Usuarios::destroy($id);
        return redirect('usuario')->with('mensaje', 'Usuario eliminado');
    }
}
