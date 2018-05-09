<!DOCTYPE html>
<html>
<body>
@php
{{
    $num=0;

    $curl = curl_init();

    $url = "http://free.currencyconverterapi.com/api/v5/convert?q=USD_ARS&compact=ultra";

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 200,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = json_decode(curl_exec($curl), true);


    if(isset($response)){
        $usd = $response['USD_ARS'];
    }


}}
@endphp
	<h2>Tubulon</h2>
	<p>Enviado desde la web </p>
	<br>
	<br>
	<h3>Datos del contacto</h3>
	<ul>
		<li><strong>Nombre:</strong> {{$nombre}}</li>
		<li><strong>Apellido:</strong> {{$apellido}}</li>
		<li><strong>Email:</strong> {{$email}}</li>
		<li><strong>Empresa:</strong> {{$empresa}}</li>
		<br>
		<br>
		<h4>Mensaje:</h4>
		<p>{{$mensaje}}</p>
		<br>
		<h4>Producto</h4>
		<table class="table table-striped table-bordered" style="border: 1px solid #333;">
            <tr>
                @if($tabla->a != null)
                    <td  style="border: 1px solid #333;">
                        {{$tabla->a}}
                    </td>
                @endif

                @if($tabla->b != null)
                    <td style="border: 1px solid #333;">
                        {{$tabla->b}}
                    </td>
                @endif

                @if($tabla->c != null)
                    <td style="border: 1px solid #333;">
                        {{$tabla->c}}
                    </td>
                @endif

                @if($tabla->d != null)
                    <td style="border: 1px solid #333;">
                        {{$tabla->d}}
                    </td>
                @endif
            <!-- PRECIO EN DOLARES  -->
                @if($tabla->g != null)
                    <td style="border: 1px solid #333;">
                        {{number_format(number_format((float)$tabla->g,2)/$usd,2)}}
                    </td>
                @endif
            <!-- DESCUENTO EN DOLARES  -->

                @if($tabla->g != null)
                    <td style="border: 1px solid #333;">
                        {{$tabla->f}}
                    </td>
                @endif
            <!-- PRECIO EN PESOS  -->

                @if($tabla->g != null)
                    <td style="border: 1px solid #333;">
                        {{$tabla->g}}
                    </td>
                @endif

                @if($tabla->h != null)
                    <td style="border: 1px solid #333;"> 
                        {{$tabla->h}}
                    </td>
                @endif

                @if($tabla->i != null)
                    <td style="border: 1px solid #333;">
                        {{$tabla->i}}
                    </td>
                @endif

                @if($tabla->j != null)
                    <td style="border: 1px solid #333;">
                        {{$tabla->j}}
                    </td>
                @endif
            </tr>
        </table>
	</ul>


</body>
</html>