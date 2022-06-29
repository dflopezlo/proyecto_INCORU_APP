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
    <div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> Contactenos</h5></div>
            <div class="card-body">
              <h5>  
              <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Explorar</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Acerca de</a></li>  
    </ul>
    <p class="text-center text-muted">© 2021 Compañia INCORU, App</p>
    <center>
    <div class="col-md-5  mb-3">
          <h5>Si quieres recibir mas información comunicate con nosotros</h5>
          <p>Envianos un correo a incoru_app@gmail.com</p>
          <p>Encuentranos en nuestras redes como INCORU APP</p>
      </div>
        <svg xmlns="https://twitter.com/danfer__lopez?t=Xb33FjfrrDtHXWa5lLRtzQ&s=08" width="28" height="28" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
    </center>
   
      </ul>
    </div>
  </footer>
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection