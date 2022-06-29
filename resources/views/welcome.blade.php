@extends('layouts.footer')
@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
            @guest
            <h1 class="text-center">Aplicación Intermediaria de Comercial Rural</h1>
			@else
					Hi {{ Auth::user()->name }}, Welcome back to {{ config('app.name', 'Laravel') }}.
            @endif	
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
<div class = "container">
         <p class = "text-success text-center">
            Esta aplicación está pensada en ti campesino, en tus necesidades, en tu forma de vender.
         </p>
         <p class = "text-justify">
            INCORU APP, es un aplicativo que permite el comercio de manera legal en sectores rurales.
</p>

<p class = "text-justify">
            La idea de este aplicativo nace de la necesidad de un propuesta que elimine los intermediarios existentes a día de hoy entre clientes y vendedores,
            normalmente los campesinos ofrecen sus productos a grandes distribuidores que se los compran a un costo muy por debajo de lo merecido, pero a su vez
            los intermediarios lo venden muy por encima de su verdadero valor a los compradores.
</p>
<p class = "text-justify">
            Con esta app se busca que el dinero no se quede en terceros que no son quienes se esfuerzan en sacar el producto al mercado, y que a su vez a los clientes
            no se les cobre excedentes que no tienen justificación. Si no quieres que los intermediarios que se quedan con tu dinero hagan parte de tu vida, es el
            momento de cambiar tu forma de comprar. 
         </p>
         <p class = "text-success text-center">
         Registrate en INCORU APP y notaras como tus finanzas empiezan a mejorar.
         </p>
</div>
    <center>
    <div class="container mb-5">
    <h2>Estos son los principales productos que puedes encontrar dentro de INCORU APP</h2>
    </div>
<div class="container mb-5 mt-5" >
<table class="table table-dark">
  <thead>
    <tr>
     <th scope="col"> <center><h2>Café</h2></center></th>
      <th scope="col"><center><h2>Platano</h2></center></th>
      <th scope="col"><center><h2>Pollo</h2></center></th>
      <th scope="col"><center><h2>Naranja</h2></center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th><center><img src="{{URL::asset('img/cafe.jpeg')}}" width="400" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></th>
      <td><center><img src="{{URL::asset('img/R.jpeg')}}" width="400" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/polloto.jpg')}}" width="400" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/naraja.jpeg')}}" width="400" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
    </tr>
    <tr>
      <th><center><img src="{{URL::asset('img/cafesito.jpg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></th>
      <td><center><img src="{{URL::asset('img/platano.jpeg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/pollo.jpeg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/naranjilla.jpg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
    </tr>
    <tr>
      <th><center><img src="{{URL::asset('img/ca.jpeg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></th>
      <td><center><img src="{{URL::asset('img/pla.jpeg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/poll.jpeg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/na.jpeg')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
    </tr>
    <tr>
      <th><center><img src="{{URL::asset('img/gifcafe.gif')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></th>
      <td><center><img src="{{URL::asset('img/platanogif.gif')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/gallina.gif')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
      <td><center><img src="{{URL::asset('img/amornaranja.gif')}}" width="300" height="200" class="d-inline-block align-text-top" style="width:100%;"><img src=""></center></td>
    </tr>
  </tbody>
</table>
</div>
    </center>
    
@endsection
