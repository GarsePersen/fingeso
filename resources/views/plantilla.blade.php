@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
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

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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
<body>

<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">

<h3>Utilize los siguientes campos para rellenar su plantilla</h3>

<div>
                <div class="top-right links">
                    <a href="{{ url('/home') }}">Inicio</a>
</div>
  <form action="/action_page.php">
    
    <label for="fname">Primer Nombre</label>
    <input type="text" id="fname" name="firstname" placeholder="Tu nombre..">

    <label for="lname">Apellido Paterno</label>
    <input type="text" id="lname" name="lastname" placeholder="Tu apellido paterno..">
    <label for="lname">Apellido Materno</label>
    <input type="text" id="lname" name="lastname" placeholder="Tu apellido materno..">

    <label for="country">Fecha de publicación</label>
    <select name="DOBMonth">
    <option> - Month - </option>
    <option value="January">Enero</option>
    <option value="Febuary">Febrero</option>
    <option value="March">Marzo</option>
    <option value="April">Abril</option>
    <option value="May">Mayo</option>
    <option value="June">Junio</option>
    <option value="July">Julio</option>
    <option value="August">Agosto</option>
    <option value="September">Septiembrer</option>
    <option value="October">Octubre</option>
    <option value="November">Noviembre</option>
    <option value="December">Diciembre</option>
</select>
<select name="Dia">
    <option> - Día - </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
<select name="Anio">
    <option> - Año - </option>
    <option value="2017">2017</option>
    
</select>
    <label for="lname">Observaciones</label>
    <input type="text" id="lname" name="lastname" placeholder="Escriba sus observaciones..">
      

  <div class="links aceptar">
    <a href="{{ ('/home') }}">Aceptar</a>
     </div>
  </form>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
