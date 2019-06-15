<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\FAcade as PDF;
use Carbon\Carbon;
use App\User;
use App\doctor;
use App\patient;
use App\receptionist;
use App\appointment;
use App\evolution;

class reports extends Controller
{
    public function usuarios($tipo){
        switch ($tipo) {
            case 'todo':
            $title = ['Reporte de todos los usuarios en el sistema','sistema','usuarios'];
            $usuarios = User::all();
                break;
            case 'dia':
            $title = ['Reporte de todos los usuarios del dia','sistema','dia'];
            $fecha = Carbon::now()->format('Y-m-d');
            $usuarios = User::wherecreated_at('created_at', '=', $fecha)->get();
                break;
            case 'semana':
            $title = ['Reporte de todos los usuarios de la semana','sistema','semana'];
            $InicioSemana = Carbon::now()->startOfWeek();
            $FinSemana = Carbon::now()->endOfWeek();
            $usuarios = User::whereBetween('created_at', [$InicioSemana,$FinSemana])->get();
                break;
            case 'mes':
            $title = ['Reporte de todos los usuarios del mes','sistema','mes'];
            $fecha = Carbon::now()->format('m');
            $usuarios = User::whereMonth('created_at','=',$fecha)->get();
                break;
            case 'año':
            $title = ['Reporte de todos los usuarios del año','sistema','año'];
            $fecha = Carbon::now()->format('Y');
            $usuarios = User::whereYear('created_at','=',$fecha)->get();
                break;
            default:
            $title = ['Reporte de todos los usuarios en el sistema','sistema','usuarios'];
            $usuarios = User::all();
                break;
        }
        $pdf = PDF::loadView('sistema.pdf.usuarios', compact('usuarios','title'));
        return $pdf->stream('reporte_'.$title[1].'_'.$title[2].'.pdf');
    }

    public function pacientes($tipo){
        switch ($tipo) {
            case 'todo':
            $title = ['Reporte de todos los pacientes en el sistema','sistema','pacientes'];
            $pacientes = patient::all();
                break;
            case 'dia':
            $title = ['Reporte de todos los pacientes del dia','sistema','dia'];
            $fecha = Carbon::now()->format('Y-m-d');
            $pacientes = patient::wherecreated_at('created_at', '=', $fecha)->get();
                break;
            case 'semana':
            $title = ['Reporte de todos los pacientes de la semana','sistema','semana'];
            $InicioSemana = Carbon::now()->startOfWeek();
            $FinSemana = Carbon::now()->endOfWeek();
            $pacientes = patient::whereBetween('created_at', [$InicioSemana,$FinSemana])->get();
                break;
            case 'mes':
            $title = ['Reporte de todos los pacientes del mes','sistema','mes'];
            $fecha = Carbon::now()->format('m');
            $pacientes = patient::whereMonth('created_at','=',$fecha)->get();
                break;
            case 'año':
            $title = ['Reporte de todos los pacientes del año','sistema','año'];
            $fecha = Carbon::now()->format('Y');
            $pacientes = patient::whereYear('created_at','=',$fecha)->get();
                break;
            default:
            $title = ['Reporte de todos los pacientes en el sistema','sistema','pacientes'];
            $pacientes = patient::all();
                break;
        }
        $pdf = PDF::loadView('sistema.pdf.pacientes', compact('pacientes','title'));
        return $pdf->stream('reporte_'.$title[1].'_'.$title[2].'.pdf');
    }

    public function medicos($tipo){
        switch ($tipo) {
            case 'todo':
            $title = ['Reporte de todos los medicos en el sistema','sistema','medicos'];
            $medicos = doctor::all();
                break;
            case 'dia':
            $title = ['Reporte de todos los medicos del dia','sistema','dia'];
            $fecha = Carbon::now()->format('Y-m-d');
            $medicos = doctor::wherecreated_at('created_at', '=', $fecha)->get();
                break;
            case 'semana':
            $title = ['Reporte de todos los medicos de la semana','sistema','semana'];
            $InicioSemana = Carbon::now()->startOfWeek();
            $FinSemana = Carbon::now()->endOfWeek();
            $medicos = doctor::whereBetween('created_at', [$InicioSemana,$FinSemana])->get();
                break;
            case 'mes':
            $title = ['Reporte de todos los medicos del mes','sistema','mes'];
            $fecha = Carbon::now()->format('m');
            $medicos = doctor::whereMonth('created_at','=',$fecha)->get();
                break;
            case 'año':
            $title = ['Reporte de todos los medicos del año','sistema','año'];
            $fecha = Carbon::now()->format('Y');
            $medicos = doctor::whereYear('created_at','=',$fecha)->get();
                break;
            default:
            $title = ['Reporte de todos los medicos en el sistema','sistema','medicos'];
            $medicos = doctor::all();
                break;
        }
        $pdf = PDF::loadView('sistema.pdf.medicos', compact('medicos','title'));
        return $pdf->stream('reporte_'.$title[1].'_'.$title[2].'.pdf');
    }

    public function recepcionistas($tipo){
        switch ($tipo) {
            case 'todo':
            $title = ['Reporte de tadas las recepcionistas en el sistema','sistema','recepcionistas'];
            $recepcionistas = receptionist::all();
                break;
            case 'dia':
            $title = ['Reporte de tadas las recepcionistas del dia','sistema','dia'];
            $fecha = Carbon::now()->format('Y-m-d');
            $recepcionistas = receptionist::wherecreated_at('created_at', '=', $fecha)->get();
                break;
            case 'semana':
            $title = ['Reporte de tadas las recepcionistas de la semana','sistema','semana'];
            $InicioSemana = Carbon::now()->startOfWeek();
            $FinSemana = Carbon::now()->endOfWeek();
            $recepcionistas = receptionist::whereBetween('created_at', [$InicioSemana,$FinSemana])->get();
                break;
            case 'mes':
            $title = ['Reporte de tadas las recepcionistas del mes','sistema','mes'];
            $fecha = Carbon::now()->format('m');
            $recepcionistas = receptionist::whereMonth('created_at','=',$fecha)->get();
                break;
            case 'año':
            $title = ['Reporte de tadas las recepcionistas del año','sistema','año'];
            $fecha = Carbon::now()->format('Y');
            $recepcionistas = receptionist::whereYear('created_at','=',$fecha)->get();
                break;
            default:
            $title = ['Reporte de tadas las recepcionistas en el sistema','sistema','recepcionistas'];
            $recepcionistas = receptionist::all();
                break;
        }
        $pdf = PDF::loadView('sistema.pdf.recepcionistas', compact('recepcionistas','title'));
        return $pdf->stream('reporte_'.$title[1].'_'.$title[2].'.pdf');
    }

    public function citas($tipo){
        switch ($tipo) {
            case 'todo':
            $title = ['Reporte de tadas las citas en el sistema','sistema','citas'];
            $citas = appointment::all();
                break;
            case 'dia':
            $title = ['Reporte de tadas las citas del dia','sistema','dia'];
            $fecha = Carbon::now()->format('Y-m-d');
            $citas = appointment::wherecreated_at('created_at', '=', $fecha)->get();
                break;
            case 'semana':
            $title = ['Reporte de tadas las citas de la semana','sistema','semana'];
            $InicioSemana = Carbon::now()->startOfWeek();
            $FinSemana = Carbon::now()->endOfWeek();
            $citas = appointment::whereBetween('created_at', [$InicioSemana,$FinSemana])->get();
                break;
            case 'mes':
            $title = ['Reporte de tadas las citas del mes','sistema','mes'];
            $fecha = Carbon::now()->format('m');
            $citas = appointment::whereMonth('created_at','=',$fecha)->get();
                break;
            case 'año':
            $title = ['Reporte de tadas las citas del año','sistema','año'];
            $fecha = Carbon::now()->format('Y');
            $citas = appointment::whereYear('created_at','=',$fecha)->get();
                break;
            default:
            $title = ['Reporte de tadas las citas en el sistema','sistema','citas'];
            $citas = appointment::all();
                break;
        }
        $pdf = PDF::loadView('sistema.pdf.citas', compact('citas','title'));
        return $pdf->stream('reporte_'.$title[1].'_'.$title[2].'.pdf');
    }
}
