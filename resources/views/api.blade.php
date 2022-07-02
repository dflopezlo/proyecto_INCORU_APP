@extends('layouts.footer')
@extends('layouts.app')
@section('title', __('Tablero de mandos'))
@section('content')
<!--<script src="https://cdn.plot.ly/plotly-2.11.1.min.js"></script>-->

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">API</h1>
            </div>
            <div class="card-body">
                <div class="text-center" id="grafico">

                </div>
                <br>
                <br>
                <hr>
                <div class="text-center"><h3>Datos obtenidos de https://www.datos.gov.co</h3></div>
            </div>
        </div>
    </div>
</div>



<script>
    var cultivo = [];
    var produccion = [];

    //Consumo de la API
    fetch('https://www.datos.gov.co/resource/qi54-achv.json')

        //Then necesita una promesa, y esa promesa se resuelve con una respuesta convertida a json
        .then(datos_obtenidos => datos_obtenidos.json())

        // datos_obtenidos es el resultado de la promesa respuesta, la cual fue convertida a un json
        .then(function transformar(datos_obtenidos) {

            //Iteramos sobre cada dato
            datos_obtenidos.forEach(function agregar(datos_obtenidos) {
                //Si los datos son diferentes de vacío
                if(datos_obtenidos.municipio == "MANIZALES"){
                    if (datos_obtenidos.cultivo != undefined && datos_obtenidos.producci_n_t != undefined) {
                        cultivo.push(datos_obtenidos.cultivo);
                        produccion.push(datos_obtenidos.producci_n_t);
                    }
                }
            });


            //Variables para las gráficas
            var graf1 = {
                y: produccion,
                x: cultivo,
                type: 'bar',
            };

            var datosGraficas = [graf1];

            //Estilos de la gráfica
            var layout = {
                title: 'EVALUACIÓN AGRÍCOLA DEL MUNICIPIO DE MANIZALES-CALDAS EN EL AÑO 2020',
                xaxis: {
                    title: 'Tipo de Cultivo',
                },
                yaxis: {
                    title: 'Producción total en toneladas del producto'
                }
            };
            Plotly.newPlot('grafico', datosGraficas, layout);
        });
</script>

@endsection