@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Docente</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="register">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                         <div class="form-group">
                        <label for="role" class="col-md-4 control-label">Tipo de Usuario</label>
                            <div class="col-md-6">
                            <select onchange = "roleSelected()" class="form-control " id="role" name = "role" required>
                                <option value="0" disabled selected>Seleccione Tipo de Usuario</option>
                                <option value = "1" >Profesor</option>
                                <option value = "3" >Comisión</option>
                                <option value = "4" >Director de Departamento</option>
                              </select>
                          </div>
                          </div>
                        <div id = "depa" class="form-group " style="display: none">
                        <label id= "lblDepartamento" for="departamento" class="col-md-4 control-label">Departamento</label>
                            <div class="col-md-6">
                                <input id="departamento" type="text" class="form-control" name="departamento">
                            </div>
                        </div>
                        <div id = "botonSubmit" class="form-group" style="display: none">
                            <div id="botonSubmit" class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar Usuario
                                </button>
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    

    function roleSelected(){
        
        var e = document.getElementById("role");
        var strUser = e.options[e.selectedIndex].value;
        if(strUser == 1){
            role1();
        }else if(strUser == 3){
            role2();
        }else if(strUser == 4){
            role3();
        }

        var elm = document.getElementById("botonSubmit");
        elm.style.display = 'block';
        
        
    }
    function role1(){
        var e = document.getElementById("depa");
        e.style.display = 'block';


    }
    function role2(){
        var e = document.getElementById("depa");
        e.style.display = 'none';
    }

    function role3(){
        var e = document.getElementById("depa");
        e.style.display = 'block';
    }


</script>
@endsection


