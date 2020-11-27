@extends('template')

@section('content')
<div class="container p-5">
    <h1> Boxy responde tus preguntas!!</h1>
    <br>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left text-success"
            type="button"
            data-toggle="collapse"
            data-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne"
          >
            ¿Qué es Boxy Animals y para qué sirve?
          </button>
        </h2>
      </div>

      <div
        id="collapseOne"
        class="collapse "
        aria-labelledby="headingOne"
        data-parent="#accordionExample"
      >
        <div class="card-body">
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
      </div>
    </div>
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
  </div>
</div>
@endsection