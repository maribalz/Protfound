<nav class="z-depth-0">
    <div class="nav-wrapper navbar ">
      <a href="{{route('index')}}" class="brand-logo"><img class="responsive-img logo" h alt="pistones ferrite" src="{{ asset($logohead->ruta) }}"  /></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">T: {{$tlf->descripcion}} <br> M: {{$cel->descripcion}}</a></li>
        <li style="width: 47px;"><a class='dropdown-trigger ' href='#' data-target='dropdown1'>
            <div class="circle">
              {{$idioma}}
            </div></a>
            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="{{route('idioma','es')}}">ES</a></li>
              <li><a href="{{route('idioma','en')}}">EN</a></li>
              <li><a href="{{route('idioma','pt')}}">PT</a></li>
            </ul>
        </li>

        <li style="width: 47px;">
            <a href="{{route('busca')}}">
              <div class="circle">
                <i class="material-icons">search</i>
              </div>
            </a>
        </a></li>

        <li style="width: 35px;margin-left: 5px;"><a href="{{route('contacto')}}" style="padding-right: 0px;">
            <div class="circle">
              <i class="material-icons">mail_outline</i>
            </div>
        </a></li>
      </ul>
    </div>
</nav>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="{{route('empresa')}}" class="@if($active=='empresa') activoli @endif">
      @if($idioma=='es')
      Empresa
      @elseif($idioma=='pt')
      Negócios
      @else
      Company
      @endif
    </a></li>
    <li class="@if($active=='productos') liactivo @endif"><a href="{{route('productos')}}" class="@if($active=='productos') activoli @endif">
      @if($idioma=='es' || $idioma=='pt')
      Productos
      @elseif($idioma=='pt')
      Produtos
      @else
      Company
      @endif
    </a></li>
    <li><a href="{{route('sectores')}}">
      @if($idioma=='es')
      Sectores

      @elseif($idioma=='pt')

      Setores

      @else

      Sectors

      @endif

    </a></li>

    <li><a href="mobile.html">

      @if($idioma=='es')

      Servicios

      @elseif($idioma=='pt')

      Serviços

      @else

      Services

      @endif

    </a></li>

    <li><a href="{{route('novedades')}}" class="@if($active=='novedades') activoli @endif">

      @if($idioma=='es')

      Novedades

      @elseif($idioma=='pt')

      Notícias

      @else

      News

      @endif

    </a></li>

    <li><a href="{{route('calidad')}}" class="@if($active=='calidad') activoli @endif">

      @if($idioma=='es')

      Calidad

      @elseif($idioma=='pt')

      Qualidade

      @else

      Quality

      @endif

    </a></li>

    <li><a href="mobile.html">

      @if($idioma=='es')

      Solicitud de presupuesto

      @elseif($idioma=='pt')

      Solicitação de orçamento

      @else

      Budget request

      @endif

    </a></li>

    <li><a href="{{route('clientes')}}">

      @if($idioma=='es' || $idioma=='pt')

      Clientes

      @else

      Clients

      @endif

    </a></li>

  </ul>

<div class="contenedor back-gray hide-on-small-only hide-on-med-only">

    <ul>

      <li class="@if($active=='empresa') liactivo @endif">

      <a href="{{route('empresa')}}" class="@if($active=='empresa') activoli @endif" >

        @if($idioma=='es')

        Empresa

        @elseif($idioma=='pt')

        Negócios

        @else

        Company

        @endif

      </a></li>

      <li class="@if($active=='productos') liactivo @endif"><a href="{{route('productos')}}" class="@if($active=='productos') activoli @endif">

        @if($idioma=='es' || $idioma=='pt')

        Productos

        @elseif($idioma=='pt')

        Produtos

        @else

        Products

        @endif

      </a></li>

      <li class="@if($active=='sectores') liactivo @endif"><a href="{{route('sectores')}}" class="@if($active=='sectores') activoli @endif">

        @if($idioma=='es')

        Sectores

        @elseif($idioma=='pt')

        Setores

        @else

        Sectors

        @endif

      </a></li>

      <li class="@if($active=='servicio') liactivo @endif"><a  href="{{route('servicios')}}"  class="@if($active=='servicio') activoli @endif">

        @if($idioma=='es')

        Servicios

        @elseif($idioma=='pt')

        Serviços

        @else

        Services

        @endif

      </a></li>

      <li class="@if($active=='novedades') liactivo @endif">

      <a href="{{route('novedades')}}" class="@if($active=='novedades') activoli @endif">

        @if($idioma=='es')

        Novedades

        @elseif($idioma=='pt')

        Notícias

        @else

        News

        @endif

      </a></li>

      <li class="@if($active=='calidad') liactivo @endif">
      <a href="{{route('calidad')}}" class="@if($active=='calidad') activoli @endif">

        @if($idioma=='es')

        Calidad

        @elseif($idioma=='pt')

        Qualidade

        @else

        Quality

        @endif

      </a></li>

      <li><a href="mobile.html">

        @if($idioma=='es')

        Solicitud de presupuesto

        @elseif($idioma=='pt')

        Solicitação de orçamento

        @else

        Budget request

        @endif

      </a></li>

      <li class="@if($active=='cliente') liactivo @endif">

        <a href="{{route('clientes')}}"  class="@if($active=='cliente') activoli @endif">

        @if($idioma=='es' || $idioma=='pt')

        Clientes

        @else

        Clients

        @endif

      </a></li>

      

    </ul>

</div>