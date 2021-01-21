@extends('template')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="text-center">
        <img class="img-fluid" src="{{ asset('img/home/Banner-perritos.png') }}" alt="">
    </div>

    <div class="container p-5">
        <center>
            <h2 class="mb-5">Detalle de tu compra</h2>
        </center>

@if(Session::has('APPROVED'))
<div class="alert alert-success col-md-12 text-center" role="alert">
    Compra realizada con exito!
    <a href="carrito#cart">Regresar al carrito</a>
  </div>
</div>
@endif

@if(Session::has('DECLINE'))
<div class="alert alert-danger col-md-12 text-center" role="alert">
    Tu compra no fue realizada con exito!
    <a href="carrito#cart">Regresar al carrito</a>
  </div>
</div>
@endif
    </div>
@endsection
