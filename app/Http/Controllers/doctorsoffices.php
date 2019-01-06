<?php
// CONSULTORIOS
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consultingroom;

class doctorsoffices extends Controller
{
    public function index()
    {
        $consultorios = consultingroom::all();
        return view('sistema.consultorio.index')->with(compact('consultorios'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $consultorio = consultingroom::create([
            'number'      =>  $request->number,
            'location'   =>  $request->location
        ]);

        return back()->with('info','Consultorio registrado econ exito!');
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
        $consultorio = consultingroom::find($id)->delete();
        return back()->with('info','Consultorio eliminada con exito!');
    }
}
