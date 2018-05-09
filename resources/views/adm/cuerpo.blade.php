<!DOCTYPE html>

<html lang="en">



<head>

    



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Panel de administración</title>



    <link rel="icon" type="image/png" href="{{ asset('imagenes/logos/favicon.png') }}"/>



    <!-- Bootstrap Core CSS -->

    <link href="{{ asset('css/adm/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="{{ asset('css/adm/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="{{ asset('css/adm/dist/sb-admin-2.css') }}" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="{{ asset('css/adm/vendor/morrisjs/morris.css') }}" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="{{ asset('css/adm/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/adm/dist/estilos.css') }}" rel="stylesheet">



</head>



<body>

    



    <div id="wrapper">



        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="">Panel de administraci&oacute;n - PROTFUND</a>

            </div>

            <!-- /.navbar-header -->



            <ul class="nav navbar-top-links navbar-right">

               <li><a href="{{route('index')}}">Ir al sitio</a></li>

                <!-- /.dropdown -->

                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <!--Usuario nombre--> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>

                    </a>

                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="{{ route('login.create') }}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>

                        </li>

                    </ul>

                    <!-- /.dropdown-user -->

                </li>

                <!-- /.dropdown -->

            </ul>

            <!-- /.navbar-top-links -->





<!-- Menu derecho -->

            <div class="navbar-default sidebar" role="navigation">

                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-home"></i> Home<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="{{ route('sliderhome.create') }}">Crear Slider</a>

                                </li>

                                <li>

                                    <a href="{{ route('sliderhome.index') }}">Editar Slider</a>

                                </li>

                                <li>

                                    <a href="{{ route('contenidohome.index') }}">Editar contenido</a>

                                </li>

                        

                                <li>

                                    <a href="{{ route('destacados.index') }}">Editar destacados</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-equalizer"></i> Empresa<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="{{ route('slideremp.create') }}">Crear Slider</a>

                                </li>

                                <li>

                                    <a href="{{ route('slideremp.index') }}">Editar Slider</a>

                                </li>

                                <li>

                                    <a href="{{ route('contenidoemp.index') }}">Editar contenido</a>

                                </li>

                            </ul>

                        </li> 

                        <li>
                            <a href="#"><i class="glyphicon glyphicon-th"></i> Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('familia.index') }}">Editar Familias</a>
                                </li>
                               <li>
                                    <a href="{{ route('producto.index') }}">Editar Productos</a>
                                </li>
                            </ul>
                        </li>   
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-th"></i> Sectores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a href="{{ route('sectores.index') }}">Editar Sectores</a>
                                </li>
                            </ul>
                        </li>      

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-th"></i> Calidad<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                               <li>

                                    <a href="{{ route('calidad.index') }}">Editar texto de calidad</a>
                                    <a href="{{ route('descargas.index') }}">Editar descargas</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-zoom-in"></i> Novedades<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                

                                <li>

                                    <a href="{{ route('categorias.index') }}">Editar Categorías</a>

                                </li>

                                <li>

                                    <a href="{{ route('novedadm.index') }}">Editar Novedades</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-th"></i> Clientes<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                               <li>

                                    <a href="{{ route('clientes.index') }}">Editar Clientes</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-th"></i> Servicios<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                               <li>

                                    <a href="{{ route('servicios.index') }}">Editar Servicios</a>

                                </li>

                            </ul>

                        </li>

                        {{--  <li>

                            <a href="#"><i class="glyphicon glyphicon glyphicon-ok"></i> Redes Sociales<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                

                                <li>

                                    <a href="{{ route('redes.index') }}">Editar Redes Sociales</a>

                                </li>

                                <li>

                                    <a href="{{ route('redes.create') }}">Crear Red Social</a>

                                </li>

                            </ul>

                        </li> --}}

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-picture"></i> Logos<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="{{ route('logos.index') }}">Editar logos</a>

                                </li>

                            </ul>

                        </li>

                    

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-briefcase"></i> Datos de la empresa<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="{{ route('datos.index') }}">Editar datos</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="#"><i class="glyphicon glyphicon-globe"></i> Metadatos<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="{{ route('metadato.index') }}">Editar metadatos</a>

                                </li>

                            </ul>

                        </li>

                        @if(Auth::user()->nivel == 'administrador')
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-user"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('usuario.create') }}">Crear usuario</a>
                                </li>
                                <li>
                                    <a href="{{ route('usuario.index') }}">Editar usuario</a>
                                </li>
                            </ul>
                        </li>
                       @endif 

                    </ul>

                </div>

                <!-- /.sidebar-collapse -->

            </div>

            <!-- /.navbar-static-side -->

        </nav>   



        <div id="page-wrapper">

<!-- Titulo de seccion -->



            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">@yield('titulo')

                    </h1>

                </div>

            </div>

            @yield('contenido') 

                                        

    </div>

    <!-- /#wrapper -->



    <!-- jQuery -->

    <script src="{{ asset('css/adm/vendor/jquery/jquery.min.js') }}"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="{{ asset('css/adm/vendor/bootstrap/js/bootstrap.min.js') }}"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="{{ asset('css/adm/vendor/metisMenu/metisMenu.min.js') }}"></script>



    <!-- Morris Charts JavaScript -->

    <script src="{{ asset('css/adm/vendor/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset('css/adm/vendor/morrisjs/morris.min.js') }}"></script>



    <!-- Custom Theme JavaScript -->

    <script src="{{ asset('js/adm/dist/sb-admin-2.js') }}"></script>

    <script src="{{ asset('js/jscolor.min.js') }}"></script>

    <script src="{{ asset('js/jscolor.js') }}"></script>



</body>



</html>

