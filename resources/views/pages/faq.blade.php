@extends('template')

@section('content')
<div class="container p-5">
    <h1 style="background:#25d366; color:white; padding:10px;text-align:center; margin-bottom:50px;"> Boxy responde tus preguntas!!</h1>
    
  <div class="accordion" id="accordionExample">
    
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo"
          >
            ¿De qué están hechas las bandejas?
          </button>
        </h2>
      </div>
      <div
        id="collapseTwo"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Hemos desarrollado dos tipos de bandejas: Una para razas pequeñas
          y medianas y otra para razas grandes <br />
          <br />
          Las bandejas de césped están compuestas de una almohadilla de
          césped natural, sustrato orgánico , una tela de material
          absorbente y otra impermeabilizante, dentro de una caja resistente
          y esta misma dentro de una bandeja de madera que tiene una vida
          útil de 4 años. El césped real es instintivamente más comprensible
          para los perros que los pañales o el césped artificial. <br />
          <br />
          Simplemente abra la caja y colóquela en un lugar adecuado donde
          iría su perro a hacer sus necesidades: en el pasillo, en el baño o
          en el balcón. Al final de su vida útil, deseche la bandeja y
          sustitúyala por una nueva. Nosotros ofrecemos el recambio por
          precios muy accesibles dependiendo la frecuencia de uso de tu
          mascota.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseThree"
            aria-expanded="false"
            aria-controls="collapseThree"
          >
            ¿Es necesario lavar o limpiar las bandejas de alguna manera?
          </button>
        </h2>
      </div>
      <div
        id="collapseThree"
        class="collapse"
        aria-labelledby="headingThree"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          No, las bandejas no requieren ninguna limpieza especial. Solo
          elimine los excrementos sólidos de la superficie.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFour">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseFour"
            aria-expanded="false"
            aria-controls="collapseFour"
          >
            ¿Cuánto durará la bandeja?
          </button>
        </h2>
      </div>
      <div
        id="collapseFour"
        class="collapse"
        aria-labelledby="headingFour"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Todo depende del tamaño, la edad del perro y la frecuencia con la
          que se usa la bandeja de pasto natural. Recomendamos cambiar la
          bandeja de pasto 2 veces al mes para perros de tamaño pequeño a
          mediano. Y cada 10 días con cachorros que estén aprendiendo a ir
          al baño. Una bandeja con césped natural es como cualquier planta
          viva debe ser rociada ligeramente con agua. Recuerde que a la
          hierba de la bandeja no le gustan las habitaciones demasiado
          oscuras y congestionadas, así como la luz solar directa. Pero la
          bandeja puede seguir utilizándose incluso si la hierba ha perdido
          su apariencia original de floración.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFive">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseFive"
            aria-expanded="false"
            aria-controls="collapseFive"
          >
            Mi perro va al baño con un pañal, ¿por qué necesita una bandeja
            de pasto?
          </button>
        </h2>
      </div>
      <div
        id="collapseFive"
        class="collapse"
        aria-labelledby="headingFive"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Primero que nada, las bandejas son más convenientes y ecológicas.
          Una bandeja reemplaza unos 40 pañales, y no necesita gastar su
          tiempo y energía en limpiar, cambiar o, además, lavar todos los
          días. Además, las bandejas lucen más estéticamente agradables,
          quedan bien en cualquier interior y no muestran manchas amarillas.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingSix">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseSix"
            aria-expanded="false"
            aria-controls="collapseSix"
          >
            ¿Utiliza solo materiales naturales?
          </button>
        </h2>
      </div>
      <div
        id="collapseSix"
        class="collapse"
        aria-labelledby="headingSix"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Sí, pensamos y nos preocupamos por la naturaleza y el medio
          ambiente, por eso utilizamos solo materiales naturales y
          ecológicos, incluido el embalaje. Todas nuestras bandejas son
          completamente biodegradables. Además, todo está hecho en Colombia.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingSeven">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseSeven"
            aria-expanded="false"
            aria-controls="collapseSeven"
          >
            ¿Dónde cultivan el cesped?
          </button>
        </h2>
      </div>
      <div
        id="collapseSeven"
        class="collapse"
        aria-labelledby="headingSeven"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Cultivamos césped en un área ecológicamente limpia a las afueras
          de Bogotá , lejos de fábricas y carreteras. Por lo tanto, al
          comprar una bandeja de pasto, está apoyando la agricultura
          Colombiana
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingEight">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseEight"
            aria-expanded="false"
            aria-controls="collapseEight"
          >
            
        ¿Cuál es el tamaño de la bandeja? ¿Puedo pedir una talla grande?

          </button>
        </h2>
      </div>
      <div
        id="collapseEight"
        class="collapse"
        aria-labelledby="headingEight"
        data-parent="#accordionExample"
      >
        <div class="card-body">
            Hasta ahora, estamos produciendo bandejas de 50 × 80 cm × 10cm y 50 × 1.20 cm × 10cm tratamos que por un precio accesible tu mascota pueda tener una bandeja cómoda en tamaño.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingNine">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseNine"
            aria-expanded="false"
            aria-controls="collapseNine"
          >
            
          ¿Necesito acostumbrar al perro al nuevo baño de alguna manera?

          </button>
        </h2>
      </div>
      <div
        id="collapseNine"
        class="collapse"
        aria-labelledby="headingNine"
        data-parent="#accordionExample"
      >
        <div class="card-body">
            Por lo general, los perros prefieren instintivamente hacer sus "necesidades" en el césped natural, pero si la mascota ya está acostumbrada a un tipo de sanitario diferente (por ejemplo, a un pañal), llevará algún corto tiempo acostumbrarse a la nueva bandeja de Boxy Animals.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTen">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseTen"
            aria-expanded="false"
            aria-controls="collapseTen"
          >
        
¿Cómo pedir una bandeja?
          </button>
        </h2>
      </div>
      <div
        id="collapseTen"
        class="collapse"
        aria-labelledby="headingTen"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Realice un pedido en el sitio web, en  Instagram o llame al  3115541537 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingEleven ">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseEleven "
            aria-expanded="false"
            aria-controls="collapseEleven"
          >
        
            ¿Dónde tienen habilitadas las entregas sin costo?
          </button>
        </h2>
      </div>
      <div
        id="collapseEleven"
        class="collapse"
        aria-labelledby="headingEleven"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Tenemos servicio de entregas en Bogota y Sabana Norte sin costo. Si requieres entregas en otra ciudad comunícate con nosotros para ayudarte. 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFourteen ">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseFourteen "
            aria-expanded="false"
            aria-controls="collapseFourteen"
          >
        
          ¿Hay franjas horarias? No quiero esperar todo el día por un mensajero
          </button>
        </h2>
      </div>
      <div
        id="collapseFourteen"
        class="collapse"
        aria-labelledby="headingFourteen"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Sí, tras la confirmación del pedido, podrá seleccionar un intervalo de 3 horas el día de la entrega. El mensajero se comunicará con usted con una antelación de 30 a 60 minutos antes de la llegada. Si no se encuentra en casa, el servicio de mensajería puede dejar el pedido en la recepción de su conjunto residencial, si así lo desea. 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwelve ">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseTwelve "
            aria-expanded="false"
            aria-controls="collapseTwelve"
          >
        
          ¿Quiero un descuento. ¿Cómo puedes obtenerlo?
          </button>
        </h2>
      </div>
      <div
        id="collapseTwelve"
        class="collapse"
        aria-labelledby="headingTwelve"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Hazle una foto a tu mascota y la bandeja de césped, escribe una pequeña reseña y postéanos en Instagram o Facebook.  Obtendrás el descuento que tengamos vigente en ese mes. 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThirteen ">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseThirteen "
            aria-expanded="false"
            aria-controls="collapseThirteen"
          >
        
          ¿ Soy propietario de una tienda de mascotas / peluquería canina/ agropecuaria  y me gustaría vender sus bandejas de pasto en mi tienda ¿Tiene una lista de precios al por mayor?
          </button>
        </h2>
      </div>
      <div
        id="collapseThirteen"
        class="collapse"
        aria-labelledby="headingThirteen"
        data-parent="#accordionExample"
      >
        <div class="card-body">
          Sí, ofrecemos bandejas de pasto para tiendas de mascotas minoristas. Escríbanos por whatsapp o al correo electrónico   (por verificar el correo) , en respuesta le enviaremos una lista de precios al por mayor. 
        </div>
      </div>
    </div>
  </div>
  <div>
  </div>
</div>
<div class="text-center">
  <img class="img-fluid pt-5" src="{{ asset('img/home/pasto.png') }}" alt="">
</div>
@endsection