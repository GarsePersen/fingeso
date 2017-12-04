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

        <h1>Docencia</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><font color="black">Descripcion </font></th>
                        <th><font color="black">Horas Semanales </font></th>
                        <th><font color="black">Horas Semestrales</font></th>
                        <th><font color="black">Semestre</font></th>
                        <th><font color="black">Estado</font></th>
                        <th><font color="black">Acciones</font></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($compromisos as $compromiso)
                     @if($compromiso->tipo_actividad == 'Docencia')
                        <tr>
                            <th>{{$compromiso->descripcion}}</th>
                            <th> {{$compromiso->hora_semana}}</th>
                            <th> {{$compromiso->hora_semestre}} </th>
                            <th> {{$compromiso->semestre}} </th>

                            @if($compromiso->active == true)
                            <th> Aprobado </th>
                            @else
                            <th> Aún no aprobado </th>
                            @endif
                            <th>
                                @if($compromiso->active == false AND Auth::user()->roles[0]->id == 3)
                                @else
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    @if(Auth::user()->roles[0]->id == 1)
                                    <a href="actividad/{{$compromiso->id}}"  type="button" class="btn btn-default">Agregar</a>
                                    @endif
                                     <a href="verActividades/{{$compromiso->id}}"  type="button" class="btn btn-default">ver actividades</a>
                                     @if(Auth::user()->roles[0]->id == 4)
                                    <a href="aprobarCompromiso/{{$compromiso->id}}"  type="button" class="btn btn-default">Aprobar</a>
                                    @endif
                                    
                                </div>
                                @endif
                            </th>
                        </tr>
                        @endif
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section style="top :50px;">
        <h1>Investigacion y desarrollo</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><font color="black">Descripcion </font></th>
                        <th><font color="black">Horas Semanales </font></th>
                        <th><font color="black">Horas Semestrales</font></th>
                        <th><font color="black">Semestre</font></th>
                        <th><font color="black">Estado</font></th>
                        <th><font color="black">Acciones</font></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($compromisos as $compromiso)
                     @if($compromiso->tipo_actividad == 'Investigacion')
                        <tr>
                            <th>{{$compromiso->descripcion}}</th>
                            <th> {{$compromiso->hora_semana}}</th>
                            <th> {{$compromiso->hora_semestre}} </th>
                            <th> {{$compromiso->semestre}} </th>
                            @if($compromiso->active == true)
                            <th> Aprobado </th>
                            @else
                            <th> Aún no aprobado </th>
                            @endif
                            <th> 
                                @if($compromiso->active == false AND Auth::user()->roles[0]->id == 3)
                                @else
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    @if(Auth::user()->roles[0]->id == 1)
                                    <a href="actividad/{{$compromiso->id}}"  type="button" class="btn btn-default">Agregar</a>
                                    @endif
                                     <a href="verActividades/{{$compromiso->id}}"  type="button" class="btn btn-default">ver actividades</a>
                                     @if(Auth::user()->roles[0]->id == 4)
                                    <a href="aprobarCompromiso/{{$compromiso->id}}"  type="button" class="btn btn-default">Aprobar</a>
                                    @endif
                                    
                                </div>
                                @endif

                            </th>
                        </tr>
                        @endif
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
     <section style="top :50px;">
        <h1>Asistencia Tecnica</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><font color="black">Descripcion </font></th>
                        <th><font color="black">Horas Semanales </font></th>
                        <th><font color="black">Horas Semestrales</font></th>
                        <th><font color="black">Semestre</font></th>
                        <th><font color="black">Estado</font></th>
                        <th><font color="black">Acciones</font></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($compromisos as $compromiso)
                     @if($compromiso->tipo_actividad == 'Asistencia')
                        <tr>
                            <th>{{$compromiso->descripcion}}</th>
                            <th> {{$compromiso->hora_semana}}</th>
                            <th> {{$compromiso->hora_semestre}} </th>
                            <th> {{$compromiso->semestre}} </th>
                            @if($compromiso->active == true)
                            <th> Aprobado </th>
                            @else
                            <th> Aún no aprobado </th>
                            @endif
                            <th>
                                @if($compromiso->active == false AND Auth::user()->roles[0]->id == 3)
                                @else
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    @if(Auth::user()->roles[0]->id == 1)
                                    <a href="actividad/{{$compromiso->id}}"  type="button" class="btn btn-default">Agregar</a>
                                    @endif
                                     <a href="verActividades/{{$compromiso->id}}"  type="button" class="btn btn-default">ver actividades</a>
                                     @if(Auth::user()->roles[0]->id == 4)
                                    <a href="aprobarCompromiso/{{$compromiso->id}}"  type="button" class="btn btn-default">Aprobar</a>
                                    @endif
                                    
                                </div>
                                @endif

                            </th>

                        </tr>
                        @endif
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
     <section style="top :50px;">
        <h1>Perfeccionamiento</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><font color="black">Descripcion </font></th>
                        <th><font color="black">Horas Semanales </font></th>
                        <th><font color="black">Horas Semestrales</font></th>
                        <th><font color="black">Semestre</font></th>
                        <th><font color="black">Estado</font></th>
                        <th><font color="black">Acciones</font></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($compromisos as $compromiso)
                     @if($compromiso->tipo_actividad == 'Perfeccionamiento')
                        <tr>
                            <th>{{$compromiso->descripcion}}</th>
                            <th> {{$compromiso->hora_semana}}</th>
                            <th> {{$compromiso->hora_semestre}} </th>
                            <th> {{$compromiso->semestre}} </th>
                            @if($compromiso->active == true)
                            <th> Aprobado </th>
                            @else
                            <th> Aún no aprobado </th>
                            @endif
                            <th>
                                @if($compromiso->active == false AND Auth::user()->roles[0]->id == 3)
                                @else
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    @if(Auth::user()->roles[0]->id == 1)
                                    <a href="actividad/{{$compromiso->id}}"  type="button" class="btn btn-default">Agregar</a>
                                    @endif
                                     <a href="verActividades/{{$compromiso->id}}"  type="button" class="btn btn-default">ver actividades</a>
                                     @if(Auth::user()->roles[0]->id == 4)
                                    <a href="aprobarCompromiso/{{$compromiso->id}}"  type="button" class="btn btn-default">Aprobar</a>
                                    @endif
                                    
                                </div>
                                @endif

                            </th>
                        </tr>
                        @endif
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section style="top :50px;">
        <h1>Administracion</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><font color="black">Descripcion </font></th>
                        <th><font color="black">Horas Semanales </font></th>
                        <th><font color="black">Horas Semestrales</font></th>
                        <th><font color="black">Semestre</font></th>
                        <th><font color="black">Estado</font></th>
                        <th><font color="black">Acciones</font></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($compromisos as $compromiso)
                     @if($compromiso->tipo_actividad == 'Administracion')
                        <tr>
                            <th>{{$compromiso->descripcion}}</th>
                            <th> {{$compromiso->hora_semana}}</th>
                            <th> {{$compromiso->hora_semestre}} </th>
                            <th> {{$compromiso->semestre}} </th>
                            @if($compromiso->active == true)
                            <th> Aprobado </th>
                            @else
                            <th> Aún no aprobado </th>
                            @endif
                             <th>
                                @if($compromiso->active == false AND Auth::user()->roles[0]->id == 3)
                                @else
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    @if(Auth::user()->roles[0]->id == 1)
                                    <a href="actividad/{{$compromiso->id}}"  type="button" class="btn btn-default">Agregar</a>
                                    @endif
                                     <a href="verActividades/{{$compromiso->id}}"  type="button" class="btn btn-default">ver actividades</a>
                                     @if(Auth::user()->roles[0]->id == 4)
                                    <a href="aprobarCompromiso/{{$compromiso->id}}"  type="button" class="btn btn-default">Aprobar</a>
                                    @endif
                                    
                                </div>
                                @endif

                            </th>
                        </tr>
                        @endif
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section style="top :50px;">
        <h1>Extension</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><font color="black">Descripcion </font></th>
                        <th><font color="black">Horas Semanales </font></th>
                        <th><font color="black">Horas Semestrales</font></th>
                        <th><font color="black">Semestre</font></th>
                        <th><font color="black">Estado</font></th>
                        <th><font color="black">Acciones</font></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    
                     @foreach($compromisos as $compromiso)
                     @if($compromiso->tipo_actividad == 'Extension')
                        <tr>
                            <th>{{$compromiso->descripcion}}</th>
                            <th> {{$compromiso->hora_semana}}</th>
                            <th> {{$compromiso->hora_semestre}} </th>
                            <th> {{$compromiso->semestre}} </th>
                            @if($compromiso->active == true)
                            <th> Aprobado </th>
                            @else
                            <th> Aún no aprobado </th>
                            @endif
                            <th>
                               @if($compromiso->active == false AND Auth::user()->roles[0]->id == 3)
                                @else
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    @if(Auth::user()->roles[0]->id == 1)
                                    <a href="actividad/{{$compromiso->id}}"  type="button" class="btn btn-default">Agregar</a>
                                    @endif
                                     <a href="verActividades/{{$compromiso->id}}"  type="button" class="btn btn-default">ver actividades</a>
                                     @if(Auth::user()->roles[0]->id == 4)
                                    <a href="aprobarCompromiso/{{$compromiso->id}}"  type="button" class="btn btn-default">Aprobar</a>
                                    @endif
                                    
                                </div>
                                @endif

                            </th>
                        </tr>
                        @endif
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section style="top :50px;">
        <h1>Educacion Continua</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><font color="black">Descripcion </font></th>
                        <th><font color="black">Horas Semanales </font></th>
                        <th><font color="black">Horas Semestrales</font></th>
                        <th><font color="black">Semestre</font></th>
                        <th><font color="black">Estado</font></th>
                        <th><font color="black">Acciones</font></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     @foreach($compromisos as $compromiso)
                     @if($compromiso->tipo_actividad == 'Educacion')
                        <tr>
                            <th>{{$compromiso->descripcion}}</th>
                            <th> {{$compromiso->hora_semana}}</th>
                            <th> {{$compromiso->hora_semestre}} </th>
                            <th> {{$compromiso->semestre}} </th>
                            @if($compromiso->active == true)
                            <th> Aprobado </th>
                            @else
                            <th> Aún no aprobado </th>
                            @endif
                            <th>
                                @if($compromiso->active == false AND Auth::user()->roles[0]->id == 3)
                                @else
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    @if(Auth::user()->roles[0]->id == 1)
                                    <a href="actividad/{{$compromiso->id}}"  type="button" class="btn btn-default">Agregar</a>
                                    @endif
                                     <a href="verActividades/{{$compromiso->id}}"  type="button" class="btn btn-default">ver actividades</a>
                                     @if(Auth::user()->roles[0]->id == 4)
                                    <a href="aprobarCompromiso/{{$compromiso->id}}"  type="button" class="btn btn-default">Aprobar</a>
                                    @endif
                                    
                                </div>
                                @endif

                            </th>
                        </tr>
                        @endif
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
    </form>
      
       

</body>

@endsection('content')