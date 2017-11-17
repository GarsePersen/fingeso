<!DOCTYPE html>
<html>
<title>Academia Usach</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">
@extends('layouts.app')
@section('content')
<!-- Blog entries -->
<div class="w3-col 1 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
   <div class="w3-container">
    <p><span class="w3-padding-large w3-right"><b>Nota: </b> <span class="w3-tag">6.5</span></span></p>
      <h3><b>Fingeso clase 5</b></h3>
      <h4><b>Autor: Profesor Ejemplo</b></h4>

      <h5>Fecha: <span class="w3-opacity">23 de Octubre, 2017</span></h5>
      <h5>Horario: <span class="w3-opacity">8:00 - 9:40</span></h5>

    </div>

    <div class="w3-container">
      <p>Quinta clase en donde se vieron los temas de ................................................................</p>
       <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Apelar</button> 
      <div class="w3-row">
        
        
        
        <div class="w3-container">

          <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">2</span></span></p>

        </div>

      </div>

    </div>

  </div>
  <hr>

  
</div>
 @endsection
</body>
</html>