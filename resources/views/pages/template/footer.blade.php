

<footer class="page-footer " >



    <div class="contenedor" style="padding-bottom: 16px;">

        <div class="row" style="margin-bottom: 0px;">



            <!--First column-->

            <div class="col s6 m6 l1" >

                <h5 class="title" >SITEMAP</h5>

                    <a href="{{route('index')}}" class="texto-footer">Home</a><br>
                    <a href="" class="texto-footer">Productos</a><br>
                    <a href="{{route('empresa')}}" class="texto-footer">Empresa</a><br>
                    <a href="{{route('descarga')}}" class="texto-footer">Sectores</a><br>
                    <a href="{{route('novedades')}}" class="texto-footer">Servicios</a><br>
            </div>

            <div class="col s6 m6 l2" style="padding-top: 43px;">
                <a href="{{route('descarga')}}" class="texto-footer">Novedades</a><br>

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
                        <a href="https://www.google.com/maps/place/Calle+12+53,+B1884CDB+Berazategui+Oeste,+Buenos+Aires/@-34.7840544,-58.2598868,17z/data=!3m1!4b1!4m5!3m4!1s0x95a3294a74505101:0x1a1e61553dd7c90!8m2!3d-34.7840544!4d-58.2576981" class="texto-mail">{{ $direccion->descripcion }}</a>
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