@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Añadir actividad realizada</div>
                <form method="POST" action="{{ route('actividad.store') }}" data-toggle="validator">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group"> 
                            <label class="col-md-4 control-label">Nombre de la actividad</label>
                            <input name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha de Inicio</label>
                            <input type="date" name="fechaInicio" class="form-control" placeholder="Elegir" required>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha de Termino</label>
                            <input type="date" name="fechaTermino" class="form-control" placeholder="Elegir" required>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Horas dedicadas</label>
                            <input type="number" name="horas" class="form-control" placeholder="Elegir" required>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Descripcion</label>
                            <textarea name="descripcion" class="form-control" placeholder="Descripcion de la medida" required></textarea>
                        </div>
                        <div class="form-group"> 
                            <center><button class="btn btn-primary" >Añadir</button>  </center>
                        </div>              
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>