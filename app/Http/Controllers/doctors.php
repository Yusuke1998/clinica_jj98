<?php
// MEDICOS
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

class doctors extends Controller
{
    public function __construct()
    {
        $this->middleware('medico');
    }

    public function index()
    {
        $medicos = doctor::all();
        return view('sistema.medico.index')->with('medicos',$medicos);
    }

    public function create()
    {
        $consultorios   = consultingroom::all();
        $especialidades = specialty::all();

        return view('sistema.medico.create')->with(compact('consultorios','especialidades'));
    }

        public function store(Request $request)
    {

        $usuario = User::create([
            'username'          => $request->username,
            'email'             => $request->email1,
            'rol'               => 'doctor',
            'password'          => bcrypt($request->password),
        ]);

        $getIdu = $usuario->id;

        $medico = doctor::create([
            'firstname'         => $request->firstname,
            'lastname'          => $request->lastname,
            'ci'                => $request->ci,
            'telephone1'        => $request->telephone1,
            'telephone2'        => $request->telephone2,
            'email1'            => $request->email1,
            'email2'            => $request->email2,
            'address1'          => $request->address1,
            'address2'          => $request->address2,
            'user_id'           => $getIdu,
            'consultingroom_id' => $request->consultingroom_id,
        ]);

        $medico->specialties()->sync($request->specialty_id);

        return back()->with('info','Medico creado con exito!');
    }

    public function show($id){
        $medico = doctor::find($id);
        return view('sistema/medico/show')->with('medico',$medico);
    }

    public function edit($id)
    {
        $editard = doctor::find($id);

        return view('sistema/medico/edit')
        ->with('editard',$editard);
    }

    public function update(Request $request, $id)
    {
        $medico = doctor::find($id);
        $medico->update([
            'firstname'         => $request->firstname,
            'lastname'          => $request->lastname,
            'ci'                => $request->ci,
            'telephone1'        => $request->telephone1,
            'telephone2'        => $request->telephone2,
            'email1'            => $request->email1,
            'email2'            => $request->email2,
            'address1'          => $request->address1,
            'address2'          => $request->address2,
            'consultingroom_id' => $request->consultingroom_id,
        ]);
        
        $medico->specialties()->sync($request->specialty_id);
        // $image->article()->associate($article);
        // $article->tags()->sync($request->tags);


        return back()->with('info','Medico actualizado con exito!');
    }

    public function destroy($id)
    {
        $medico = doctor::find($id);
        $usuario = User::find($medico->user_id);
        $medico->delete();
        $usuario->delete();

        return back()->with('info','Medico eliminado con exito!');
    }
}
