<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\compromiso_actividad;
use App\actividad;

/**
*
*/
class compromisoActividadController extends Controller
{
	public function guardarCompromiso(Request $request)
	{
	    
	        compromiso_actividad::create([
	            'id_usuario'=> $request->id_usuario,
	            'descripcion'=> $request->Descripcion,
	            'tipo_actividad' => $request->tipo_actividad,
	            'semestre' =>$request->Semestre,
	            'hora_semana' =>$request->Horas_semana,
	            'hora_semestre' => $request->Horas_semestre,
	        ]);
	        return back();
	        
	}

}
	