@extends('template')

@section('content')
    <div class="container p-5">
    <img class="img-fluid py-5" src="{{ asset('img/home/Banner-perritos.png') }}" alt="">
        <div class="row">
            <div class="col-md-6">
                <h3>¡Comunícate con nosotros!</h3>
                <p>Para realizar un pedido o recibir asesoria...</p>
                <p> <i class="fa fa-phone"></i> Teléfono: 301 582 0990</p>
                <p><i class="fa fa-envelope"></i> Correo: ventas@boxyanimals.com.co </p>
                <p>Bogotá, Colombia</p>
            </div>
            <div class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <label for="">Nombres y Apellidos</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Celular</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Mensaje</label>
                      <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
