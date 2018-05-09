
<footer class="page-footer " >

    <div class="contenedor" style="padding-bottom: 16px;">
        <div class="row" style="margin-bottom: 0px;">

            <!--First column-->
            <div class="col s6 m6 l1" >
                <h5 class="title" >SITEMAP</h5>
                    <a href="{{route('index')}}" class="texto-footer">Home</a><br>
                    <a href="" class="texto-footer">
                    @if($idioma=='es' || $idioma=='pt')
                      Productos
                      @elseif($idioma=='pt')
                      Produtos
                      @else
                      Products
                    @endif
                    </a><br>
                    <a href="{{route('empresa')}}" class="texto-footer">
                    @if($idioma=='es')
                      Empresa
                      @elseif($idioma=='pt')
                      Negócios
                      @else
                      Company
                    @endif
                    </a><br>
                    <a href="{{route('descarga')}}" class="texto-footer">
                    @if($idioma=='es')
                      Sectores
                      @elseif($idioma=='pt')
                      Setores
                      @else
                      Sectors
                    @endif
                    </a><br>
                    <a href="{{route('novedades')}}" class="texto-footer">
                    @if($idioma=='es')
                      Servicios
                      @elseif($idioma=='pt')
                      Serviços
                      @else
                      Services
                      @endif
                    </a><br>
            </div>
            <div class="col s6 m6 l2" style="padding-top: 43px;">
                <a href="{{route('descarga')}}" class="texto-footer">
                @if($idioma=='es')
                  Novedades
                  @elseif($idioma=='pt')
                  Notícias
                  @else
                  News
                  @endif
                </a><br>
                <a href="{{route('novedades')}}" class="texto-footer">
                @if($idioma=='es')
                  Calidad
                  @elseif($idioma=='pt')
                  Qualidade
                  @else
                  Quality
                  @endif
                </a><br>
                <a href="{{route('contacto')}}" class="texto-footer">
                @if($idioma=='es')
                  Solicitud de presupuesto
                  @elseif($idioma=='pt')
                  Solicitação de orçamento
                  @else
                  Budget request
                  @endif
                </a><br>
                <a href="{{route('contacto')}}" class="texto-footer">
                @if($idioma=='es' || $idioma=='pt')
                  Clientes
                  @else
                  Clients
                  @endif
                </a><br>
            </div>

            <div class="col s12 m12 l6" style="">
                <a href="{{route('index')}}" class="margenes-f ">
                    <img class="img-responsive imgfoot" src="{{ asset($logofoot->ruta) }}">

                </a>
            </div>

            <!--fifth column-->
            <div class="col s12 m12 l3 texto-footer"  >
                <h5 class="title" style="padding-left: 32px;">AIRDIN-INDOMATIX</h5>
                
                <div class="row" style="margin-bottom: 6px;" >
                    <div class="col s2 ">
                        <i class="material-icons">location_on</i>
                    </div>
                    <div class="col s10 ">
                        <a href="https://www.google.com/maps/place/Calle+12+53,+B1884CDB+Berazategui+Oeste,+Buenos+Aires/@-34.7840544,-58.2598868,17z/data=!3m1!4b1!4m5!3m4!1s0x95a3294a74505101:0x1a1e61553dd7c90!8m2!3d-34.7840544!4d-58.2576981" class="texto-mail">
                       {{ $direccion->descripcion }}
                       </a>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 6px;">
                    <div class="col s2 ">
                        <i class="material-icons">phone_in_t</i>
                    </div>
                    <div class="col s10">
                        <a class="texto-mail" href="tel:{{ $tlf->descripcion }}">
                       {{ $tlf->descripcion }}
                       </a>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 6px;" >
                    <div class="col s2 ">
                        <i class="material-icons">phone_android</i>
                    </div>
                    <div class="col s10">
                       <a class="texto-mail" href="tel:{{ $cel->descripcion }}">
                       {{ $cel->descripcion }}
                       </a>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 6px;">
                    <div class="col s2 ">
                        <i class="material-icons">email</i>
                    </div>
                    <div class="col s10 ">
                      <a class="texto-mail" href="mailto:{{ $email->descripcion }}">
                      {{ $email->descripcion }}  
                      </a>                  
                      </div>
                </div>

                
            </div>
            <!--/.fifth column-->

        </div>
    </div>

</footer>
<!--/.Footer-->