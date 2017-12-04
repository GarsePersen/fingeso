@extends('layouts.app')
@section('content')

<head>
  <meta charset="UTF-8">
 
  
</head>

<body>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">


<form method="GET" style="border-top-style: solid;">
     <section style="top :50px;">
        <h1 style="font-size: 50px">Resumen</h1>
        <div class="tbl-header">
            <table style="margin-left: 250px;">
            <tr>
                <th><h1>Comprometido</h1></th>
            
            <th style="margin-left: 500px;padding-left: 250px;"><H1>Realizado</H1><th>
            <tr>
                </table>
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Hora/Semana</th>
                        <th>Hora/Año</th>
                        <th>Hora/Semana</th>
                        <th>Hora/Año</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content" style="height: 463px">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     
                 
                        <tr>
                            <th>Docencia</th>
                            <?php
                                $id = Auth::id();
                                $compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
                                $Hsemana = 0;
                                $Hsemestre = 0;

                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Docencia'){
                                        $Hsemana += $compromiso->hora_semana;
                                        $Hsemestre += $compromiso->hora_semestre;
                                    }
                                    
                                }

                            ?>
                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            <?php 
                                $Hsemana = 0;
                                $Hsemestre = 0;
                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Docencia'){
                                        $actividades = DB::table('actividad')->where('id_compromiso',$compromiso->id)->get();
                                        foreach ($actividades as $actividad) {
                                            $Hsemana += $actividad->hora_semana;
                                            $Hsemestre += $actividad->hora_semestre;
                                        }
                                        
                                    }
                                    
                                }

                            ?>

                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            
                        </tr>


                        <tr>
                            <th>Investigacion y Desarrollo</th>
                            <?php
                                $id = Auth::id();
                                $compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
                                $Hsemana = 0;
                                $Hsemestre = 0;

                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Investigacion'){
                                        $Hsemana += $compromiso->hora_semana;
                                        $Hsemestre += $compromiso->hora_semestre;
                                    }
                                    
                                }

                            ?>
                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            <?php 
                                $Hsemana = 0;
                                $Hsemestre = 0;
                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Investigacion'){
                                        $actividades = DB::table('actividad')->where('id_compromiso',$compromiso->id)->get();
                                        foreach ($actividades as $actividad) {
                                            $Hsemana += $actividad->hora_semana;
                                            $Hsemestre += $actividad->hora_semestre;
                                        }
                                        
                                    }
                                    
                                }

                            ?>

                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            
                        </tr>


                        <tr>
                            <th>Asistencia Tecnica</th>
                            <?php
                                $id = Auth::id();
                                $compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
                                $Hsemana = 0;
                                $Hsemestre = 0;

                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Asistencia'){
                                        $Hsemana += $compromiso->hora_semana;
                                        $Hsemestre += $compromiso->hora_semestre;
                                    }
                                    
                                }

                            ?>
                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            <?php 
                                $Hsemana = 0;
                                $Hsemestre = 0;
                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Asistencia'){
                                        $actividades = DB::table('actividad')->where('id_compromiso',$compromiso->id)->get();
                                        foreach ($actividades as $actividad) {
                                            $Hsemana += $actividad->hora_semana;
                                            $Hsemestre += $actividad->hora_semestre;
                                        }
                                        
                                    }
                                    
                                }

                            ?>

                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            
                        </tr>

                        <tr>
                            <th>Perfeccionamiento</th>
                            <?php
                                $id = Auth::id();
                                $compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
                                $Hsemana = 0;
                                $Hsemestre = 0;

                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Perfeccionamiento'){
                                        $Hsemana += $compromiso->hora_semana;
                                        $Hsemestre += $compromiso->hora_semestre;
                                    }
                                    
                                }

                            ?>
                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            <?php 
                                $Hsemana = 0;
                                $Hsemestre = 0;
                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Perfeccionamiento'){
                                        $actividades = DB::table('actividad')->where('id_compromiso',$compromiso->id)->get();
                                        foreach ($actividades as $actividad) {
                                            $Hsemana += $actividad->hora_semana;
                                            $Hsemestre += $actividad->hora_semestre;
                                        }
                                        
                                    }
                                    
                                }

                            ?>

                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            
                        </tr>

                        <tr>
                            <th>Administracion Academica</th>
                            <?php
                                $id = Auth::id();
                                $compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
                                $Hsemana = 0;
                                $Hsemestre = 0;

                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Administracion'){
                                        $Hsemana += $compromiso->hora_semana;
                                        $Hsemestre += $compromiso->hora_semestre;
                                    }
                                    
                                }

                            ?>
                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            <?php 
                                $Hsemana = 0;
                                $Hsemestre = 0;
                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Administracion'){
                                        $actividades = DB::table('actividad')->where('id_compromiso',$compromiso->id)->get();
                                        foreach ($actividades as $actividad) {
                                            $Hsemana += $actividad->hora_semana;
                                            $Hsemestre += $actividad->hora_semestre;
                                        }
                                        
                                    }
                                    
                                }

                            ?>

                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            
                        </tr>


                        <tr>
                            <th>Extension</th>
                            <?php
                                $id = Auth::id();
                                $compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
                                $Hsemana = 0;
                                $Hsemestre = 0;

                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Extension'){
                                        $Hsemana += $compromiso->hora_semana;
                                        $Hsemestre += $compromiso->hora_semestre;
                                    }
                                    
                                }

                            ?>
                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            <?php 
                                $Hsemana = 0;
                                $Hsemestre = 0;
                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Extension'){
                                        $actividades = DB::table('actividad')->where('id_compromiso',$compromiso->id)->get();
                                        foreach ($actividades as $actividad) {
                                            $Hsemana += $actividad->hora_semana;
                                            $Hsemestre += $actividad->hora_semestre;
                                        }
                                        
                                    }
                                    
                                }

                            ?>

                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            
                        </tr>

                        <tr>
                            <th>Educacion Continua</th>
                            <?php
                                $id = Auth::id();
                                $compromisos = DB::table('compromisoActividad')->where('id_usuario',$id)->get();
                                $Hsemana = 0;
                                $Hsemestre = 0;

                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Educacion'){
                                        $Hsemana += $compromiso->hora_semana;
                                        $Hsemestre += $compromiso->hora_semestre;
                                    }
                                    
                                }

                            ?>
                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            <?php 
                                $Hsemana = 0;
                                $Hsemestre = 0;
                                foreach($compromisos as $compromiso) {
                                    if ($compromiso->tipo_actividad == 'Educacion'){
                                        $actividades = DB::table('actividad')->where('id_compromiso',$compromiso->id)->get();
                                        foreach ($actividades as $actividad) {
                                            $Hsemana += $actividad->hora_semana;
                                            $Hsemestre += $actividad->hora_semestre;
                                        }
                                        
                                    }
                                    
                                }

                            ?>

                            <th> {{$Hsemana}}</th>
                            <th> {{$Hsemestre}} </th>
                            
                        </tr>
                        
                        
                   
                </tbody>
            </table>
        </div>
    </section>
    </form>
       

</body>

@endsection('content')