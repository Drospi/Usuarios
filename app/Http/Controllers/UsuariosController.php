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
        $usuarios = Usuarios::all();

        return view('lista', compact('usuarios'));
    }

    public function agregar()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuarios();
        $usuario->nombre =$request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */

}
