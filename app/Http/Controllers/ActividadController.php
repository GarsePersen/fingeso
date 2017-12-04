<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;	
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\compromiso_actividad;
use App\actividad;


class ActividadController extends Controller
{
    public function agregarActividad(Request $request)
    {

    	actividad::create([
	            'id_compromiso'=> $request->id_compromiso,
	            'descripcion'=> $request->descripcion,
	            'tipo_actividad' => $request->tipo_actividad,
	            'semestre' =>$request->semestre,
	            'hora_semana' =>$request->Horas_semana,
	            'hora_semestre' => $request->Horas_semestre,
	        ]);
    	return back();
    	
    }
    public function viewActividad($id)
    {
    	$compromisos = compromiso_actividad::find($id);
    	return view('actividad',compact('compromisos'));
    }
    public function actividadCompromiso($id){
        $actividades = DB::table('actividad')->where('id_compromiso',$id)->get();
        return view('verActividades',compact('actividades'));
    }
}
