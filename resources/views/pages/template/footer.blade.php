

<footer class="page-footer " >
    <div class="contenedor" style="padding-bottom: 40px;">

        <div class="row" style="margin-bottom: 0px;">

            <div class="col s6 m6 l1" >
                    <a href="{{route('index')}}" class="texto-footer">Inicio</a><br>
                    <a href="" class="texto-footer">Nosotros</a><br>
                    <a href="{{route('empresa')}}" class="texto-footer">Productos</a><br>
                    <a href="{{route('descarga')}}" class="texto-footer">Servicios</a><br>
            </div>

            <div class="col s6 m6 l2" style="padding-right: 0px;">
                <a href="{{route('descarga')}}" class="texto-footer">Clientes</a><br>
                <a href="{{route('descarga')}}" class="texto-footer">Calidad</a><br>
                <a href="{{route('descarga')}}" class="texto-footer">Solicitud de Presupuesto</a><br>
                <a href="{{route('descarga')}}" class="texto-footer">Contacto</a><br>

            </div>

            <div class="col s12 m12 l6" style="">
                <a href="{{route('index')}}" class="margenes-f ">
                    <img class="img-responsive imgfoot" src="{{ asset($logofoot->ruta) }}">
                </a>
            </div>

            <!--fifth column-->

            <div class="col s12 m12 l3 texto-footer"  >
                <div class="row" style="margin-bottom: 6px;" >

                    <div class="col s2 " style="padding-top: 5px;">
                        <i class="material-icons">location_on</i>
                    </div>
                    <div class="col s10 ">
                        <a href="https://www.google.com/maps/place/Calle+12+53,+B1884CDB+Berazategui+Oeste,+Buenos+Aires/@-34.7840544,-58.2598868,17z/data=!3m1!4b1!4m5!3m4!1s0x95a3294a74505101:0x1a1e61553dd7c90!8m2!3d-34.7840544!4d-58.2576981" class="texto-mail">{!! $direccion->descripcion !!}</a>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 6px;">
                    <div class="col s2 ">
                        <i class="material-icons">phone_in_t</i>
                    </div>
                    <div class="col s10">
                      <a class="texto-mail" href="tel:{{ $tlf->descripcion }}">{{ $tlf->descripcion }}</a>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 6px;">
                    <div class="col s2 ">
                        <i class="material-icons">email</i>
                    </div>
                    <div class="col s10 ">
                      <a class="texto-mail" href="mailto:{{ $email->descripcion }}">{{ $email->descripcion }}</a>                  
                      </div>

                </div>
            </div>

        </div>
    </div>
</footer>