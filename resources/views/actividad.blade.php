@extends('layouts.app')


<!DOCTYPE html>
<html>
<title>Academia Usach</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('styles')
@parent
<style>
input[type=text], select {
    color: #3C3176;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


/* The alert message box */
.alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
}

/* The close button */
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
    color: black;
}
.full-height {
                height: 100vh;
            }
.aceptar {
    
    background-color: #4CAF50; /* Green */
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
</style>
@stop
<body >

@section('content')


<div class=container>
    <h2>Utilize los siguientes campos para agregar una actividad</h2>
<div>
    

  <form method="POST" action="{{ route('guardar.actividad') }}">
                        {{ csrf_field() }}
    <div >
        <label for="Descripcion">Descripcion</label>
        <input type="text" id="fname" name="descripcion" placeholder="Descripcion de la actividad" required="">
    </div> 
    <input type="hidden" name="id_compromiso" value="{{$compromisos->id}}">
    <label for="Semestre">Semestre</label>
    <input type = "text" name = "semestre" value = "{{$compromisos->semestre}}" readonly="readonly" required="">
    <label for="country">Tipo de Actividad</label>
    <input type="text" name="tipo_actividad" value = "{{$compromisos->tipo_actividad}}" readonly="readonly" required="">
    <div class="form-group">
    <label>Horas Semanales Asignadas</label>
    <input type="number" min="1" id="fname" name="Horas_semana" placeholder="1" required="">
    </div>
    <div>
    <label>Horas Semestrales Asignadas</label>
    <input type="number" min="1" id="fname" name="Horas_semestre" placeholder="1" required="">
    </div>
    <button type="submit">Aceptar</button>
  </form>
</div>
</div>

</body>
</html>

 @endsection