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
  <h2>Descubre las novedades de los usuarios de Academia Usach</h2><br>
    <div class="row">
        <div class="col-md-12 ">
 <div class="w2-col m7">
    <h4>Buscador:</h4>
      <input type="text" name="search" placeholder="Buscar por Docente.."> <br>
      <input type="text" name="search" placeholder="Buscar por Archivo..">

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <span class="w3-right w3-opacity">hace 20 minutos</span>
        <h4>Roberto Gonzales</h4><br>

        <p>Octava clase de ....</p>
          
        <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Agregar a favoritos</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button> 

          <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">2</span></span></p>

      
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <span class="w3-right w3-opacity">hace 1 hora</span>
        <h4>Carolina Bonacic</h4><br>

        <p>Paper sobre ....</p>
          
       <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Agregar a favoritos</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button> 

        <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">1</span></span></p>

      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <span class="w3-right w3-opacity">hace 2 horas</span>
        <h4>Hector Antillanca</h4><br>

        <p>Quinta clase de fingeso sobre ....</p>
          
        <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Agregar a favoritos</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button> 

        <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">0</span></span></p>

      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <span class="w3-right w3-opacity">hace 2 horas</span>
        <h4>Fransisco Acuña</h4><br>

        <p>Quinta clase de fingeso sobre .....</p>
          
        <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Agregar a favoritos</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button> 

        <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">3</span></span></p>

      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <span class="w3-right w3-opacity">hace 1 semana</span>
        <h4>Victor Parada</h4><br>

        <p>Paper hacerca de ....</p>
          
        <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Agregar a favoritos</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button> 

        <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">4</span></span></p>

      </div>


      
      
      
      
    <!-- End Middle Column -->
    </div>
           
        </div>
    </div>
</div>
@endsection
</body>
</html>
