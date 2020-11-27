<nav class="text-center navbarr  navbar-expand-sm  main-nav">

  <div class="text-center">
    <img class="img-fluid text-center" src="{{ asset('img/logo2.png') }}" alt="">
  </div>
  <button class="navbar-toggler mb-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-light"></i>
  </button>
    <div class="container justify-content-center collapse navbar-collapse" id="navbarNav">

        <ul class="nav navbar-nav flex-fill justify-content-center ">
            <li class="nav-item"><a class="mr-4 menu-texto" href="{{url('/')}}">Inicio</a></li>
            <li class="nav-item"><a class="mr-4 menu-texto" href="#">¿Qué es Boxy Animals?</a></li>
            <li class="nav-item"><a class="mr-4 menu-texto" href="{{url('faq')}}">Preguntas Frecuentes</a></li>
            <li class="nav-item"><a class="mr-4 menu-texto" href="{{url('contacto')}}">Contacto</a></li>
        </ul>

    </div>
</nav>
