@extends('template')

@section('content')
<style>
    
</style>
<section>
    <div class="container py-5">
        <div class="col-md-6">
            
        </div>
        <div class="row">
            <div class="col-md-7">
                <h1 style="background:#25d366; color:white; padding:10px;text-align:center; margin-bottom:50px;border-radius:20px">¿Qué es Boxy Animals y para qué sirve?</h1>
                
                <p style="text-align:justify">
                    Boxy Animals es un sanitario para perros o un césped natural para
          otras especies como Gatos, Hámsters, Conejos, entre otros.
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
            <div class="col-lg-4 col-md-5 text-center">
                <div class="mb-5">
                    <iframe  width="100%" height="300px" src="https://www.youtube.com/embed/-3nsqEGZQng" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="{{asset("img/fotos/1.png")}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{asset("img/fotos/2.png")}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{asset("img/fotos/3.png")}}" alt="">
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
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