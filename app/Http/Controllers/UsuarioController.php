<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('layout.table',['datos'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

            $usuario = new Usuario();
            $usuario->name = $request->name;
            $usuario->surname = $request->surname;
            $usuario->email = $request->email;
            $usuario->password = $request->password;
            $usuario->save();
    
            return redirect()->route('index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
