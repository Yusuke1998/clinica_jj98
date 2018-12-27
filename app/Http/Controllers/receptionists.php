<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\casefile;
use App\consultingroom;
use App\patient;
use App\specialty;
use App\receptionist;
use App\appointment;
use App\bill;
use App\evolution;
use App\query;
use App\User;

class receptionists extends Controller
{
    public function __construct()
    {
        $this->middleware('recepcionista');
    }

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
        'email' => $request->email1,
        'rol' => 'doctor',
        'password' => bcrypt($request->password),
        ]);
        $getIdu = $usuario->id;

        $recepcionista = receptionist::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'telephone1' => $request->telephone1,
        'telephone2' => $request->telephone2,
        'email1' => $request->email1,
        'email2' => $request->email2,
        'address1' => $request->address1,
        'address2' => $request->address2,
        'user_id' => $getIdu,
        ]);
        // $getIdm = $recepcionista->id;

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
        $recepcionista = receptionist::find($id);
        $recepcionista->update([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'ci' => $request->ci,
        'telephone1' => $request->telephone1,
        'telephone2' => $request->telephone2,
        'email1' => $request->email1,
        'email2' => $request->email2,
        'address1' => $request->address1,
        'address2' => $request->address2,
        ]);

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
