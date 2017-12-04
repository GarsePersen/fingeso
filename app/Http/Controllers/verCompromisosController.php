<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\compromiso_actividad;

/**
*
*/
class verCompromisosController extends Controller
{
	public function viewCompromisos()
	{

	    	$id = Auth::id();
	    	$usuario = \App\User::find($id);
	    	$compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
	       	return view('verCompromisos', compact('compromisos'));
	        
	        
	}

}
	