<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\doctor;
use App\address;
use App\casefile;
use App\consultingroom;
use App\email;
use App\patient;
use App\specialty;
use App\telephone;
use App\receptionist;
use App\appointment;
use App\bill;
use App\evolution;
use App\query;
use App\User;

class doctors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = doctor::all();
        return view('sistema.medico.index')->with('medicos',$medicos);
    }

    public function create()
    {
        //
    }

        public function store(Request $request)
    {
        $usuario = User::create([
        'username' => $request->username,
        'email' => $request->email,
        'rol' => 'doctor',
        'password' => bcrypt($request->password),
        ]);
        $getIdu = $usuario->id;

        $medico = doctor::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'user_id' => $getIdu,
        ]);
        $getIdm = $medico->id;

        $telefono = new telephone;
        $telefono->type = $request->typeT1;
        $telefono->number = $request->telephones1;
        $telefono->doctor_id = $getIdm;
        $telefono->save();

        if ($request->typeT2 && $request->telephones2) {
            $telefono = new telephone;
            $telefono->type = $request->typeT2;
            $telefono->number = $request->telephones2;
            $telefono->doctor_id = $getIdm;
            $telefono->save();
        }

        $direccion = new address;
        $direccion->type = $request->typeA1;
        $direccion->details = $request->address1;
        $direccion->doctor_id = $getIdm;
        $direccion->save();

        if ($request->typeA2 && $request->address2) {
            $direccion = new address;
            $direccion->type = $request->typeA2;
            $direccion->details = $request->address2;
            $direccion->doctor_id = $getIdm;
            $direccion->save();
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
