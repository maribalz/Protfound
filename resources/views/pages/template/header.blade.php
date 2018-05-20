<div class="contenedor back-white hide-on-small-only hide-on-med-only">
      <a href="{{route('busca')}}">
    <div class="circle">
      <i class="material-icons" style="color: #363636;">search</i>
    </div></a>
    <div class="conte-solicitud">
    <a href="{{route('presupuesto')}}">SOLICITUD DE PRESUPUESTO</a>
    </div>
</div>
<nav class="z-depth-0">
    <div class="nav-wrapper navbar ">
      <a href="{{route('index')}}" class="brand-logo"><img class="responsive-img logo" h alt="pistones ferrite" src="{{ asset($logohead->ruta) }}"  /></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li class="@if($active=='empresa') liactivo @endif">
          <a href="{{route('empresa')}}" class="@if($active=='empresa') activo @endif">EMPRESA</a>
        </li>
        
        <li class="@if($active=='productos') liactivo @endif">
            <a href="{{route('familias')}}" class="@if($active=='productos') activo @endif">PRODUCTOS</a>
        </li>

        <li class="@if($active=='servicios') liactivo @endif">
          <a href="{{route('servicio')}}" class="@if($active=='servicios') activo @endif">SERVICIOS</a>
        </li>

        <li class="@if($active=='clientes') liactivo @endif">
          <a href="{{route('clientes')}}" class="@if($active=='clientes') activo @endif">CLIENTES</a>
        </li>

        <li class="@if($active=='calidad') liactivo @endif">
          <a href="{{route('calidadind')}}" class="@if($active=='calidad') activo @endif">CALIDAD</a>
        </li>

        <li class="@if($active=='descargas') liactivo @endif">
          <a href="{{route('descarga')}}" class="@if($active=='descargas') activo @endif">DESCARGAS</a>
        </li>
        
        <li class="@if($active=='contacto') liactivo @endif">
          <a href="{{route('contacto')}}" class="@if($active=='contacto') activo @endif" style="padding-right: 0px;">CONTACTO</a>
        </li>

      </ul>

    </div>
</nav>
  <ul class="sidenav" id="mobile-demo">
    <li>
      <a href="{{route('empresa')}}">EMPRESA</a>
    </li>
    
    <li>
        <a href="">PRODUCTOS</a>
    </li>
    <li>
      <a href="{{route('servicio')}}">SERVICIOS</a>
    </li>

    <li>
      <a href="{{route('clientes')}}">CLIENTES</a>
    </li>

    <li>
      <a href="">CALIDAD</a>
    </li>

    <li>
      <a href="{{route('descarga')}}">DESCARGAS</a>
    </li>
    
    <li>
      <a href="{{route('contacto')}}" style="padding-right: 0px;">CONTACTO</a>
    </li>

  </ul>

