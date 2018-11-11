<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receptionist;
use App\User;
use App\telephone;
use App\email;
use App\address;

class receptionists extends Controller
{
     
    public function index()
    {
        $recepcionistas = receptionist::all();
        return view('sistema/recepcionista/index')->with('recepcionistas',$recepcionistas);
    }

    public function store(Request $request)
    {
        // dd($request);
        // $recepcionista = new receptionist;
        // $recepcionista->firstname = $request->firstname;
        // $recepcionista->lastname = $request->lastname;
        // $recepcionista->ci = $request->ci;
        // $recepcionista->save();

        $recepcionista = receptionist::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        ]);
        $getIdr = $recepcionista->id;

        $usuario = User::create([
        'username' => $request->username,
        'email' => $request->email,
        'rol' => 'receptionist',
        'password' => bcrypt($request->password)
        ]);

        $getIdu = $usuario->id;
        // dd($getId);

        $telefono = new telephone;
        $telefono->type = $request->typeT1;
        $telefono->number = $request->telephones1;
        $telefono->receptionist_id = $getIdr;
        $telefono->save();

        if ($request->typeT2 && $request->telephones2) {
            $telefono = new telephone;
            $telefono->type = $request->typeT2;
            $telefono->number = $request->telephones2;
            $telefono->receptionist_id = $getIdr;
            $telefono->save();
        }

        $direccion = new address;
        $direccion->type = $request->typeA1;
        $direccion->details = $request->address1;
        $direccion->receptionist_id = $getIdr;
        $direccion->save();

        if ($request->typeA2 && $request->address2) {
            $direccion = new address;
            $direccion->type = $request->typeA2;
            $direccion->details = $request->address2;
            $direccion->receptionist_id = $getIdr;
            $direccion->save();
        }

        return back();
    }

    public function edit($id)
    {
        $editarr = receptionist::find($id);
        
        $recepcionistas = receptionist::all();

        return view('sistema/recepcionista/edit')
        ->with('editarr',$editarr)
        ->with('recepcionistas',$recepcionistas);

    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $usuario = receptionist::find($id);
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->rol = $request->rol;
        $usuario->update();

        return back();
    }

    public function destroy($id)
    {
        $usuario = receptionist::find($id);
        $usuario->delete();

        return back();
    }
}
