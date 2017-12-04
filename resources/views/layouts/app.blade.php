<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @section('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>



    @show

</head>
<body>
    <div class="container">
        <div class="row">


               

                    

                <div class="sidebar-nav">
                        <ul class="drawer" >
                            
                            <li>
                                <a href="{{ url('/') }}">
                                    <i class="fa fa-home"></i>
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('descubre') }}">
                                    <i class="fa fa-eye"></i>
                                    <span>Descubre</span>
                                </a>
                            </li>
                            @guest
                            <li>
                                <a href="{{ route('login') }}">
                                    <i class="fa fa-user"></i>
                                    <span>Ingresar</span>
                                </a>
                            </li>
                            

                            @else
                            
                            @if(Auth::user() != null)
                                @if(Auth::user()->roles[0]->id == 1)
                                <li>

                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span>Perfil</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('perfil') }}" >
                                            <i class="fa fa-flash"></i>
                                            <span>Detalles</span>
                                        </a>
                                    </li>
                                    <li>


                                        <a href="{{ url('perfil') }}">Mi perfil  </a>
                                        </a>
                                        

                    
                                    </li>
                                    <li>

                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-dot-circle-o"></i>
                                            <span>Salir</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </a>
                                    </li>


                                </ul>
                            </li>
                            <li>

                                <a href="#">
                                    <i class="fa fa-folder"></i>
                                    <span>Plantilla</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="planillaAnual" >
                                            <i class="fa fa-flash"></i>
                                            <span>Generar plantilla anual</span>
                                        </a>
                                    </li>
                                    

                                </ul>
                            </li>
                            <li>

                                <a href="#">
                                    <i class="fa fa-folder"></i>
                                    <span>Actividades</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="actividad" >
                                            <i class="fa fa-plus"></i>
                                            <span>Añadir actividades</span>
                                        </a>
                                    </li>
                                    

                                </ul>
                            </li>
                            <li>

                                <a href="#">
                                    <i class="fa fa-folder"></i>
                                    <span>Compromisos</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/agregarCompromiso" >
                                            <i class="fa fa-plus"></i>
                                            <span>Añadir compromisos</span>
                                        </a>
                                    </li>
                                    

                                </ul>
                            </li>
                                @endif
                                
                            @endif
                            @if(Auth::user() != null)
                                @if(Auth::user()->roles[0]->id == 2)
                                     <li>
                                            <a href="{{ url('registrarUsuario') }}">
                                                 <i class="fa fa-user-plus"></i>
                                                 <span>Registrar Usuario</span>

                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{ url('getUsers') }}">
                                                 <i class="fa fa-users"></i>
                                                 <span>Administrar Usuarios</span>

                                            </a>
                                        </li>
                                           <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-dot-circle-o"></i>
                                            <span>Salir</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </a>
                                    </li>
                                    @endif
                                    
                                        
                                
                            @endif

                            @if(Auth::user() != null)
                                @if(Auth::user()->roles[0]->id == 3)
                                     <li>
                                            <a href="{{ url('registrarUsuario') }}">
                                                 <i class="fa fa-users"></i>
                                                 <span>Docentes</span>

                                            </a>
                                        </li>
                                        
                                        <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-dot-circle-o"></i>
                                            <span>Salir</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </a>
                                    </li>
                                           
                                    @endif
                                
                            @endif
                            @endguest
                            @if(Auth::user() != null)
                                @if(Auth::user()->roles[0]->id == 4)
                                     <li>
                                            <a href="{{ url('registrarUsuario') }}">
                                                 <i class="fa fa-folder"></i>
                                                 <span>Registros</span>

                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{ url('registrarUsuario') }}">
                                                 <i class="fa fa-folder"></i>
                                                 <span>Acuerdo de Compromisos</span>

                                            </a>
                                        </li>
                                        
                                        <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-dot-circle-o"></i>
                                            <span>Salir</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </a>
                                    </li>
                                           
                                    @endif
                                
                            @endif

                            
                            
                            </ul>


                    </div>
                        </div>
        </div>

                <div class="col-md-11 col-sm-offset-1" >
                    @if (session()->has('flash'))
                            <div class="container">
                                <div class="alert alert-success">{{ session('flash') }}</div>
                            </div>
                            @endif
                    @yield('content')
                </div>
        




        <!-- Scripts -->
        @section('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
        @show
    </body>
    </html>




