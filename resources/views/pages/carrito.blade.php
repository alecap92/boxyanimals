@php
$productos= \Cart::session('cart')->getContent();

@endphp
@extends('template')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="text-center">
        <img class="imagen-carrito" src="{{ asset('img/carrito/carrito.png') }}" alt="">
    </div>
    <h2 class="text-center" style="color:rgb(221, 82, 106)">Estas a pocos pasos de tener tu Boxy! </h2>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-md-5 px-5">
                <h2>Ingresa tus datos </h2>
                <br><br>
                <form action="{{ route('datosCliente') }}" method="POST" id="datosclient">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombres y Apellidos <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="nombre" id="name" aria-describedby="helpId" placeholder=""
                        {{ count(\Cart::session('cart')->getContent()) === 0 ?'disabled':'' }}>
                    </div>
                    <div class="form-group">
                        <label for="">Teléfono <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="telefono" id="tel" aria-describedby="helpId" placeholder=""
                        {{ count(\Cart::session('cart')->getContent()) === 0 ?'disabled':'' }}>
                    </div>
                    <div class="form-group">
                        <label for="">Ciudad <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="ciudad" id="ciu" aria-describedby="helpId" placeholder=""
                        {{ count(\Cart::session('cart')->getContent()) === 0 ?'disabled':'' }}>
                    </div>
                    <div class="form-group">
                        <label for="">Dirección <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="direccion" id="dir" aria-describedby="helpId" placeholder=""
                        {{ count(\Cart::session('cart')->getContent()) === 0 ?'disabled':'' }}>
                    </div>


                </form>
            </div>
            <div class=" col-12 col-md-7 border p-3" id="cart">
                <h2>Elige los productos que necesitas</h2>
                <br>
                <form action="{{ route('addCart') }}" method="post" id="sendform">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <select class="form-control cantidad" name="cantidad" id="cantidad">
                                  <option hidden value=""></option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Producto</label>
                                <select class="form-control product" name="nombre" id="">
                                    <option>Boxy Grande</option>
                                    <option>Boxy Mediano</option>
                                </select>
                                <input hidden type="text" value="" name="precio" class="precio">
                                <input hidden type="text" value="" name="id" class="id">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Agregar</label>
                                <i class="fas fa-plus addCart" style="color: green"></i>
                            </div>
                        </div>
                    </div>
                </form>
                @if (count(\Cart::session('cart')->getContent()) === 0)

                @else



                <div class="row">
                  <table class="table table-responsive">
                      <thead>
                          <th>Producto</th>
                          <th>Cantidad</th>
                          <th>total</th>
                      </thead>
                      <tbody>
                          @foreach ($productos as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>$ {{ number_format(Cart::session('cart')->get($item->id)->getPriceSum()) }}</td>
                                <td><a href="{{ route('deleteCart',Crypt::encrypt($item->id)) }}"><i class="fas fa-trash" style="color: red"></i></a></td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
                <div class="row py-5">
                    <div class="col-md-6">
                        <h4>Total Pedido:</h4>
                    </div>
                    <div class="col-md-6">
                        <h4>$ {{ number_format(Cart::session('cart')->getTotal()) }}</h4>
                    </div>
                </div>
                <button type="button" role="button" class="btn btn-success sendcheckout">Continuar</button>
                @endif
                <br><br>

            </div>
        </div>
    </div>
    <script>
    $('#name').bind('keyup blur',function(){
        var node = $(this);
        node.val(node.val().replace(/[^a-z,A-Z ]/g,'')); }
    );

    $('#tel').bind('keyup blur',function(){
        var node = $(this);
        node.val(node.val().replace(/[^1-9]/g,'')); }
    );

        $('.addCart').click(function(){
            var prod = $('.product').val();
            var cantidad = $('.cantidad').val();
            if (cantidad === "") {
              alert("selecciona una cantidad");
              return 0;
            }


            if(prod === "Boxy Grande"){
                $('.precio').val("100000");
                $('.id').val("1");
            }if(prod === "Boxy Mediano"){
                $('.precio').val("70000");
                $('.id').val("2");
            }
            $('#sendform').submit();
        });

        $('.sendcheckout').click(function(){
            var name = $('#name').val();
            var telefono = $('#tel').val();
            var ciudad = $('#ciu').val();
            var direccion = $('#dir').val();


            if (name === "") {
              alert("El campo nombre es obligatorio");
              return 0;
            }else if (telefono === "") {
              alert("El campo telefono es obligatorio");
              return 0;
            }else if (ciudad === "") {
              alert("El campo ciudad es obligatorio");
              return 0;
            }else if (direccion === "") {
              alert("El campo direccion es obligatorio");
              return 0;
            }
            else{
              $('#datosclient').submit();
            }


        });
    </script>
@endsection
