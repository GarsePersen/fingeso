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
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Hora Semana</th>
                        <th>Hora Semestre</th>
                        <th>Semestre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                     
                    @foreach($actividades as $actividad)
                        <tr>
                            <th>{{$actividad->descripcion}}</th>
                            <th> {{$actividad->hora_semana}}</th>
                            <th> {{$actividad->hora_semestre}} </th>
                            <th> {{$actividad->semestre}} </th>
                            <th>
                                <div class="btn-group btn-group-xs" style="width: 200px;" role="group" aria-label="...">
                                    <a href=""  type="button" class="btn btn-default">Agregar Comentario</a>
                                </div>

                            </th>
                        </tr>
                        
                     @endforeach
                </tbody>
            </table>
        </div>
    </section>
    </form>
       

</body>

@endsection('content')