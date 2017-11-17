<!DOCTYPE html>
<html>
<title>Academia Usach</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>
@extends('layouts.app')
@section('content')




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
<h1 class="w3-text-teal">Academia Usach</h1>
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Quienes Somos?</h1>
      <p>Academia Usach es un sitio web que permite almacenar las clases y papers realizados por los profesores de la Universidad de Santiago de Chile para luego poder visualizarlos, permitiendo tener a la mano las investigaciones y clases realizadas.</p>
    </div>


  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Cómo se Utiliza?</h1>
      <p>Si eres alumno, puedes visualizar las clases realizadas por los profesores de la universidad sin necesidad de registrarse. Si eres profesor, debes comunicarte con el director para crear tu cuenta, y ya podrás subir tus clases y papers para la comunidad. Además, una comisión revisadora revisa los avanzes digitalmente, o bien puedes imprimir tus planillas para una entrega manual.</p>
 </div>
  <div class="w3-row w3-padding-64">
    

  

<!-- END MAIN -->
</div>
 @endsection
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>