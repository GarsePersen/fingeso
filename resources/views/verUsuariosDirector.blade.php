<!DOCTYPE html>
<html>
<title>Academia Usach</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
input[type=text] {
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 100%;
}
</style>
<body class="w3-theme-l5">
@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Usuarios:</h2><br>
    <div class="row">
        <div class="col-md-12 ">
 <div class="w2-col m7">
      @for($i = 1; $i < count($usuarios); $i++)
      @if($usuarios[$i]->roles[0]->id == 1)
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        
        <h4>{{$usuarios[$i]->name}}</h4><br> 

        @if($usuarios[$i]->roles[0]->id == 3)
        <p>Comisión revisadora</p>
        @else
        <p>Departamento: {{$usuarios[$i]->departament}}</p>
        @endif

        <p>Mail: {{$usuarios[$i]->email}}</p>
        @if($usuarios[$i]->calification == NULL)
        <p>Nota: Sin Calificar </p>
        @else
        <p>Nota: {{$usuarios[$i]->calification}}</p>
        @endif

        
        <form method="post" action="verCompromisosComision" > 
        <input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 
        <input type="hidden" name="idUsr" value="{{$usuarios[$i]->id}}"> 
        <button type="submit"  class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-check"></i> Ver Compromisos </button>
        </form>  




      </div>
      @endif
      @endfor


      
      
      
      
    <!-- End Middle Column -->
    </div>
           
        </div>
    </div>
</div>

</body>
</html>
@endsection
