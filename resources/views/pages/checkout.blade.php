@extends('template')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="text-center">
        <img class="img-fluid" src="{{ asset('img/home/mascotas.png') }}" alt="">
    </div>

    <div class="container p-5">
        <center>
            <h2 class="mb-5">Confirma que todo este correcto</h2>
        </center>

        <div class="row">

            <div class="col-md-5 px-5">
                <h2>Tus datos</h2>
                <br><br>



                <form action="{{ route('datosCliente') }}" method="POST" id="datosclient">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre</label><br>
                        <strong>
                            {{ $datosCliente->nombre }}
                        </strong>
                    </div>
                    <div class="form-group">
                        <label for="">Telefono</label><br>
                        <strong>
                            {{ $datosCliente->telefono }}
                        </strong>
                    </div>
                    <div class="form-group">
                        <label for="">Ciudad</label><br>
                        <strong>
                            {{ $datosCliente->ciudad }}
                        </strong>
                    </div>
                    <div class="form-group">
                        <label for="">Direccion</label><br>
                        <strong>
                            {{ $datosCliente->direccion }}
                        </strong>
                    </div>


                </form>
            </div>
            <div class="col-md-7 border p-3" id="cart">
                <h2>Tus productos</h2>
                <div class="row">
                  <table class="table">
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
                <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                    <input name="merchantId"    type="hidden"  value="{{ env('MERCHANT_ID_PAYU') }}">
                    <input name="accountId"     type="hidden"  value="{{ env('ACOUNT_ID_PAYU') }}">
                    <input name="description"   type="hidden"  value="prueba">
                    <input name="referenceCode" type="hidden"  value="{{ $datosCliente->nombre }}">
                    <input name="amount"        type="hidden"  value="{{ Cart::session('cart')->getTotal() }}">
                    <input name="tax"           type="hidden"  value="0">
                    <input name="taxReturnBase" type="hidden"  value="0">
                    <input name="currency"      type="hidden"  value="{{ env('CURRENCY_PAYU') }}">
                    <input name="signature"     type="hidden"  value="{{ $firma }}">
                    <input name="test"          type="hidden"  value="1">
                    <input name="buyerEmail"    type="hidden"  value="test@test.com">
                    <input name="responseUrl"    type="hidden"  value="{{route('response')}}">
                    <input name="confirmationUrl"    type="hidden"  value="{{url('confirmation')}}">
                    <input name="Submit" class="btn btn-success" type="submit"  value="Pagar">
                  </form>
                <br><br>

            </div>
        </div>
    </div>
    <script>


        $('.sendcheckout').click(function(){

            $('#datosclient').submit();

        });
    </script>
@endsection
