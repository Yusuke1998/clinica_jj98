<?php
// ESPECIALIDADES
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialty;

class specialties extends Controller
{
    public function __construct()
    {
        $this->middleware('medico');
    }

    public function index()
    {
        $especialidades = specialty::all();
        return view('sistema.especialidad.index')->with(compact('especialidades'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $especialidad = specialty::create([
            'name'      =>  $request->name,
            'details'   =>  $request->details
        ]);

        return back()->with('info','Especialidad registrada econ exito!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $especialidad = specialty::find($id)->delete();
        return back()->with('info','Especialidad eliminada con exito!');
    }
}
