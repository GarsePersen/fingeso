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
@extends('layouts.app')
@section('content')
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Profesor de Ejemplo</h4>
         <p class="w3-center"><img src="fotoPerfil.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Profesor de ..</p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> 1 de Abril de 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Calificación: 6.5</button>
          <button  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Apelar Calificación</button>
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-pencil fa-fw w3-margin-right"></i> Seguidos</button>
          <div id="Demo1" class="fa w3-hide w3-container">
            <p><i class= "fa fa-times"> </i> Fransisco Acuña</p>
            <p><i class= "fa fa-times"> </i>Victor Parada</p>
            <p><i class= "fa fa-times"> </i>Claudio</p>
          </div>
         
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="fa fa-pencil w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Intereses</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">Matematicas</span>
            <span class="w3-tag w3-small w3-theme-d4">Informatica</span>
            <span class="w3-tag w3-small w3-theme-d3">Papers</span>
            <span class="w3-tag w3-small w3-theme-d2">Computadoras</span>
            <span class="w3-tag w3-small w3-theme-d1">Fingeso</span>
            <span class="w3-tag w3-small w3-theme">Paradigmas</span>
            <span class="w3-tag w3-small w3-theme-l1">Calculo</span>
            <span class="w3-tag w3-small w3-theme-l2">Algebra</span>
            <span class="w3-tag w3-small w3-theme-l3">Musica</span>
            <span class="w3-tag w3-small w3-theme-l4">Arte</span>
            <span class="w3-tag w3-small w3-theme-l5">Historia</span>
          </p>
        </div>
      </div>
      <br>
      
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
    <h1>  Tus Publicaciones</h1>
      <input type="text" name="search" placeholder="Buscar..">
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

       
        <span class="w3-right w3-opacity">hace 1 dia</span>
        <h4>Clase de programacion</h4><br>

        <p>Se realiza clase de programacion de ...</p>
         <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> <i class="fa fa-pencil-square-o"></i>  Editar</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-print"></i>  Imprimir</button> 

         <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">15</span></span></p>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

       
        <span class="w3-right w3-opacity">hace 2 dias</span>
        <h4>Clase de programacion</h4><br>

        <p>Se realiza clase de programacion de ...</p>
         <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> <i class="fa fa-pencil-square-o"></i>  Editar</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-print"></i>  Imprimir</button> 

         <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">7</span></span></p>
      </div>

       <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

       
        <span class="w3-right w3-opacity">hace 3 dias</span>
        <h4>Paper</h4><br>

        <p>Paper sobre ...</p>
         <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> <i class="fa fa-pencil-square-o"></i>  Editar</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-print"></i>  Imprimir</button> 

         <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">6</span></span></p>
      </div>

       <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

       
        <span class="w3-right w3-opacity">hace 4 dias</span>
        <h4>Clase de programacion</h4><br>

        <p>Se realiza clase de programacion de ...</p>
         <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> <i class="fa fa-pencil-square-o"></i>  Editar</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-print"></i>  Imprimir</button> 

         <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">8</span></span></p>
      </div>

       <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

       
        <span class="w3-right w3-opacity">hace 8 dias</span>
        <h4>Clase de programacion</h4><br>

        <p>Se realiza clase de programacion de ...</p>
         <button type="button" onclick="location.href='{{ url('verPlanilla') }}';" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-eye"></i>  Ver</button> 
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> <i class="fa fa-pencil-square-o"></i>  Editar</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-print"></i>  Imprimir</button> 

         <p><span class="w3-padding-large w3-right"><b>Comentarios: </b> <span class="w3-tag">2</span></span></p>
      </div>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Solicitud de Amistad</p>
          <img src="fotoPerfilMujer.jpg" alt="Avatar" style="width:50%"><br>
          <span>Monica Villanueva</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
     
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>


 @endsection
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


</script>

</body>
</html> 