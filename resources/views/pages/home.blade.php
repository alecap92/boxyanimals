@extends('template') @section('content')

<img class="img-fluid w-100" src="{{ asset('img/home/home.png') }}" alt="" />

<div class="container">
    <section class="textos text-center pt-5">
        <h1>Bandeja De Cesped Natural Para Mascotas</h1>
        <h2 class="subtitulo-texto">Solución Innovadora <img class="icono" src="{{ asset('img/home/iconos/logo.svg') }}" /></h2>
        <img class="img-fluid w-100" src="{{ asset('img/home/pasto.png') }}" alt="" />
    </section>

    <div class="row seccion1 p-0 m-0">
        <div class="col-md-6 col-sm-4">
            <h2>¿Cómo Funciona?</h2>
            <p>
                Si tu mascota está en casa y necesita hacer sus necesidades,
                usualmente se acostumbra usar paños, periodicos o una terraza,
                con Boxy Animals puedes tener el espacio perfecto para tus
                mascotas sin necesidad de tener molestos olores, o espacio
                inutilizado. Las bandejas están fabricadas con materiales 100%
                naturales y cuentan con Almohadilla de pasto biodegradables lo que
                hace que sea una solución amigable con tu mascota y con el
                planeta. Ademas, Las bandejas Boxy Animals tienen una apariencia
                agradable, y acompaña muy bien tus muebles en el hogar.
            </p>
            
        </div>
        <div class="col-md-6 col-sm-8 p-0 m-0">
            <img
                class="img-fluid p-0"
                src="{{ asset('img/home/gato.png') }}"
                alt=""
            />
        </div>
    </div>
</div>
<div class="container-fluid seccion2">
    <div class="row my-5 container mr-auto ml-auto p-3">
        <div class="col-md-6 col-sm-12 p-0 m-0">
            <img
                class="img-fluid"
                src="{{ asset('img/home/golden.png') }}"
                alt=""
            />
        </div>
        <div class="col-md-6 col-sm-12">
            <h2 style="border-radius:50px;">¿Sirve para mi mascota?</h2>
            <p>
                Las bandejas están fabricadas con materiales 100% naturales
                Además las almohadilla de pasto son biodegradables. Se ve bien en el
                interior Las bandejas Boxy Animals tienen una apariencia más
                agradable desde el punto de vista estético encajan perfectamente
                en el interior.
            </p>
        </div>
    </div>
</div>
.<div class="container">
    <div class="row seccion3">
        <div class="col-md-6">
            <h2>Beneficios</h2>
            <table class="seccion3-tabla">
                <tr>
                    <td><img class="icono" src="{{ asset('img/home/iconos/1.svg')}}"> </td>
                    <td> <p>El césped natural bloquea el aroma durante 2 a 3 semanas</p></td>
                </tr>
            
                <tr>
                    <td> <img class="icono" src="{{ asset('img/home/iconos/2.svg')}}"> </td>
                    <td> <p>No requiere limpieza a diario</p></td>
                </tr>
                <tr>
                    <td> <img class="icono" src="{{ asset('img/home/iconos/3.svg')}}"> </td>
                    <td><p>Previene el crecimiento bacteriano</p></td>
                </tr>
                <tr>
                    <td> <img class="icono" src="{{ asset('img/home/iconos/4.svg')}}"> </td>
                    <td><p>Totalmente biodegradable no contaminante</p></td>
                </tr>
                <tr>
                    <td> <img class="icono" src="{{ asset('img/home/iconos/5.svg')}}"> </td>
                    <td><p>Instintivamente comprensible para que los perros aprendan
                        fácilmente</p></td>
                </tr>
                <tr>
                    <td> <img class="icono" src="{{ asset('img/home/iconos/6.svg')}}"> </td>
                    <td><p>Ideal para entrenar a tu cachorro para futuros paseos al
                        aire libre</p></td>
                </tr>
                <tr>
                    <td> <img class="icono" src="{{ asset('img/home/iconos/7.svg')}}"> </td>
                    <td><p>Adecuado para perros de difícil aseo</p></td>
                </tr>
                <tr>
                    <td> <img class="icono" src="{{ asset('img/home/iconos/8.svg')}}"> </td>
                    <td><p>Adecuado para personas mayores o perros en cuarentena que no
                        han ido antes al baño en casa</p></td>
                </tr>
            </table>
        </div>
    </div>

    <section class="p-3">
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>Boxy Mediano 80cmx50cm</h3>
                <img
                    class="img-fluid"
                    src="{{ asset('img/boxy-mediana.png') }}"
                    alt=""
                />
                <a href="{{ route('carrito') }}" style="color: white"
                    ><button type="submit" class="btn btn-success mb-5">
                        Comprar
                    </button>
                </a>
            </div>
            
            <div class="col-md-6 text-center p-0 m-0">
                <h3>Boxy Grande <br> 1.2mx50cm</h3>
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
    <img
                    class="img-fluid my-5"
                    src="{{ asset('img/home/pasto.png') }}"
                    alt=""
                />
</div>
</div>
@endsection
