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

        return view('sistema/recepcionista/index')
        ->with('recepcionistas',$recepcionistas);
    }

    public function store(Request $request)
    {
        $usuario = User::create([
        'username' => $request->username,
        'email' => $request->email,
        'rol' => 'receptionist',
        'password' => bcrypt($request->password),
        ]);
        $getIdu = $usuario->id;

        $recepcionista = receptionist::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'user_id' => $getIdu,
        ]);
        $getIdr = $recepcionista->id;

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
        // $telefonos = receptionist::find($id)->telephones;
        $recepcionistas = receptionist::all();

        return view('sistema/recepcionista/edit')
        ->with('editarr',$editarr)
        ->with('recepcionistas',$recepcionistas);
    }

    public function update(Request $request, $id)
    {
        // $Rusuario = receptionist::find($id);
        // $Rusuario->username = $request->username;
        // $Rusuario->email = $request->email;
        // $Rusuario->password = bcrypt($request->password);
        // $Rusuario->rol = $request->rol;
        // $Rusuario->user_id = $Rusuario->user->id;
        // $Rusuario->update();

        $recepcionista = receptionist::find($id);
        $recepcionista->update([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'user_id' => $recepcionista->user->id,
        ]);

        $telefono = new telephone;
        $telefono->type = $request->typeT1;
        $telefono->number = $request->telephones1;
        $telefono->receptionist_id = $recepcionista->id;
        $telefono->save();

        if ($request->typeT2 && $request->telephones2) {
            $telefono = new telephone;
            $telefono->type = $request->typeT2;
            $telefono->number = $request->telephones2;
            $telefono->receptionist_id = $recepcionista->id;
            $telefono->save();
        }

        $direccion = new address;
        $direccion->type = $request->typeA1;
        $direccion->details = $request->address1;
        $direccion->receptionist_id = $recepcionista->id;
        $direccion->save();

        if ($request->typeA2 && $request->address2) {
            $direccion = new address;
            $direccion->type = $request->typeA2;
            $direccion->details = $request->address2;
            $direccion->receptionist_id = $recepcionista->id;
            $direccion->save();
        }

        return back();
    }

    public function show($id){
        $recepcionista = receptionist::find($id);

        return view('sistema/recepcionista/show')->with('recepcionista',$recepcionista);
    }

    public function destroy($id)
    {
        $recepcionista = receptionist::find($id);
        $recepcionista->delete();

        return back();
    }
}
