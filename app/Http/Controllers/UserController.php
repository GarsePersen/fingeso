<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('verUsuarios', compact('usuarios'));
    }

    public function indexComision()
    {
        $usuarios = User::all();
        return view('verUsuariosComision', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $u = User::create([
                'name'=> $request->name,
                'email' => $request->email,
                'departament' => $request->departamento,
                'password' => bcrypt($request->password),
            ]);
        $u->roles()->attach($request->role);   
        $usuarios = User::all();
        return view('verUsuarios', compact('usuarios'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         $usuario = User::find($request->idUsr);
         
         return view('editarUsuario', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $usr = User::find($request->idUsr);
        $usr->name = $request->name;
        $usr->password = bcrypt($request->password);
        $usr->email = $request->email;
        $usr->save();
        $usuarios = User::all();
        return view('verUsuarios', compact('usuarios'));
    }

    public function calificar(Request $request)
    {
        $usr = User::find($request->idUsr);
        $usr->calification = $request->calification;
        $usr->save();
        $usuarios = User::all();
        return view('verUsuariosComision', compact('usuarios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $usr = User::find($request->idUsr);
        echo $request->idUsr;
        $usr->delete();
        $usuarios = User::all();
        return view('verUsuarios', compact('usuarios'));
    }
}
