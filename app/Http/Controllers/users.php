<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class users extends Controller
{
    public function __construct()
    {
        $this->middleware('administrador');
    }

    public function index()
    {
        $usuarios = User::all();
        return view('sistema/usuario/index')->with('usuarios',$usuarios);
    }

    public function store(Request $request)
    {
        // dd($request);
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->rol = $request->rol;
        $user->password = bcrypt($request->password);
        
        $user->save();

        return back();
    }

    public function edit($id)
    {
        $editaru = User::find($id);
        $usuarios = User::all();
        return view('sistema/usuario/edit')
        ->with('editaru',$editaru)
        ->with('usuarios',$usuarios);

    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $usuario = User::find($id);
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->rol = $request->rol;
        $usuario->update();

        return back();
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return back();
    }
}
