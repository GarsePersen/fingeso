<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function store(Request $request)
    {
    	return;
    }
    public function add()
    {
    	return view('plantilla/addActividad');
    }
}
