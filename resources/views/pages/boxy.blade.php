@extends('template')

@section('content')

<section>
    <div class="container py-5">
        <div class="col-md-6">
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <h1 style="background:#25d366; color:white; padding:10px;text-align:center; margin-bottom:50px;">¿Qué es Boxy Animals y para qué sirve?</h1>
                
                <p>
                    Boxy Animals es un sanitario para perros o un césped natural para
          otras especies como Gatos, Hámsteres, Conejos, entre otros.
          Nuestras Unidades constan de una almohadilla de pasto natural
          dentro de una caja de cartón resistente y si el cliente lo
          requiere adicional con una bandeja en madera inmunizada que se ve
          bien dentro del interior y que facilita el uso de dicha unidad.
          Son una excelente alternativa a los periódicos, pañales y bandejas
          de césped artificial. Recomendamos nuestras bandejas a todos los
          animales que viven en la ciudad. Nuestras bandejas de césped real
          serán útiles para:
                </p>
                <ul>
                    <li>
                      Perros que se ven obligados a quedarse en casa más de 10
                      horas.
                    </li>
                    <li>
                      Para razas de perros que tienen dificultades para aguantar
                      durante mucho tiempo
                    </li>
                    <li>Para entrenar cachorros a hacer en el pasto.</li>
                    <li>
                      Durante períodos de enfermedad o cuarentena después de la
                      vacunación.
                    </li>
                    <li>Perros mayores que ya tienen dificultades para caminar.</li>
                  </ul>
            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-3nsqEGZQng" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <img class="img-fluid" src="{{ asset('img/boxy/labrador.png') }}" width="50%" alt="">
            </div>
        </div>    


        <section class="py-5" >
            <div class="row">
                <div class="col-md-6 text-center">
                    <h3>Boxy Mediano 80cmx50cm</h3>
                    <img
                        class="img-fluid"
                        src="{{ asset('img/boxy-mediana.png') }}"
                        alt=""
                    />
                    <a href="{{ route('carrito') }}" style="color: white"
                        ><button type="submit" class="btn btn-success">
                            Comprar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <h3>Boxy Grande 120cmx50cm</h3>
                    <img
                        class="img-fluid"
                        src="{{ asset('img/boxy-grande.png') }}"
                        alt=""
                    />
                    <a href="{{ route('carrito') }}" style="color: white"
                        ><button type="submit" class="btn btn-success">
                            Comprar
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div> 


   

    <div class="text-center">
        <img class="img-fluid" src="{{ asset('img/home/pasto.png') }}" alt="">
    </div>



</section>

@endsection