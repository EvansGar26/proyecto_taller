@extends('template.master')
@section('contenido_central')

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{!! asset('estilo/assets/images/course-video.mp4') !!}" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Una decisión cambia por completo tu vida</h6>
            <h2><em>¿tienes la</em> información necesaria?</h2>
            <div class="main-button">
                <div class="scroll-to-section"><a href="#section2">Ver más</a></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="features-post">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-pencil"></i>Objetivo</h4>
            </div>
            <div class="content-hide">
              <p>Somos un equipo de expertos en orientación vocacional y profesional que te guiarán en este proceso de selección de carrera. Entendemos que esta decisión es importante y puede generar dudas y preocupaciones, pero no te preocupes, estamos aquí para ayudarte.</p>
              <div class="scroll-to-section"><a href="#section2">Más información</a></div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-graduation-cap"></i>Conferencias</h4>
            </div>
            <div class="content-hide">
              <p>Podrás encontrar herramientas y recursos para identificar tus intereses, habilidades y valores, para que puedas tomar una decisión informada sobre tu futuro académico y profesional.</p>
              <div class="scroll-to-section"><a href="#section3">Detalles</a></div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post third-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-book"></i>Carreras</h4>
            </div>
            <div class="content-hide">
              <p>Tendrás acceso a una amplia red de universidades y programas académicos, para que puedas encontrar la opción que mejor se adapte a tus intereses y objetivos.</p>
              <div class="scroll-to-section"><a href="#section4">Leer más</a></div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section why-us" id="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Conocenos más</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div id='tabs'>
          <ul>
            <li><a href="#tabs-1">Objetivo</a></li>
            <li><a href="#tabs-2">Oportunidades</a></li>
            <li><a href="#tabs-3">Enfoque</a></li>
          </ul>
          <section class='tabs-content'>
            <article id='tabs-1'>
              <div class="row">
                <div class="col-md-6">
                  <img src="{!! asset('estilo/assets/images/choose-us-image-01.png') !!}" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Objetivo</h4>
                  <p>Evitar que los estereotipos profesionales influyan en la toma de decisiones de un grupo de señoritas ingresadas al colegio de bachilleres plantel 12, Almoloya de Juárez; creando una plataforma web de orientación vocacional que permita la interacción entre las estudiantes con profesionistas del área de ciencia e ingeniería.</p>
                </div>
              </div>
            </article>
            <article id='tabs-2'>
              <div class="row">
                <div class="col-md-6">
                  <img src="{!! asset('estilo/assets/images/choose-us-image-02.png') !!}" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Oportunidades</h4>
                  <p>Aquí podrás encontrar información detallada sobre las carreras universitarias más populares, incluyendo los planes de estudio, las oportunidades de trabajo y las tendencias del mercado laboral. También te brindamos información sobre las diferentes universidades y programas académicos, para que puedas tomar una decisión informada.</p> 
                </div>
              </div>
            </article>
            <article id='tabs-3'>
              <div class="row">
                <div class="col-md-6">
                  <img src="{!! asset('estilo/assets/images/choose-us-image-03.png') !!}" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Enfoque</h4>
                  <p>Nuestro enfoque es personalizado y te brindamos atención individualizada para garantizar que encuentres la carrera universitaria adecuada para ti. Te acompañamos en todo el proceso de selección, desde el primer paso hasta la elección final.</p>
                </div>
              </div>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section courses" id="section4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Elige tu carrera</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-01.jpg') !!}" alt="Course #1">
          <div class="down-content">
            <h4>Ingeniería 1</h4>
            <p>Descripción</p>
            
            <div class="text-button-pay">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-02.jpg') !!}" alt="Course #2">
          <div class="down-content">
            <h4>Ciencia 1</h4>
            <p>Descripción</p>
            
            <div class="text-button-free">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-03.jpg') !!}" alt="Course #3">
          <div class="down-content">
            <h4>Ingeniería 2 </h4>
            <p>Descripción</p>
            
            <div class="text-button-pay">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-04.jpg') !!}" alt="Course #4">
          <div class="down-content">
            <h4>Ciencia 2</h4>
            <p>Descripción</p>
            
            <div class="text-button-free">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-05.jpg') !!}" alt="">
          <div class="down-content">
            <h4>Ingeniería 3</h4>
            <p>Descripción</p>
            <div class="text-button-pay">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-01.jpg') !!}" alt="">
          <div class="down-content">
            <h4>Ciencia 3</h4>
            <p>Descripción</p>
            <div class="text-button-free">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-02.jpg') !!}" alt="">
          <div class="down-content">
            <h4>Ingeniería 4</h4>
            <p>Descripción</p>
            <div class="text-button-free">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-03.jpg') !!}" alt="">
          <div class="down-content">
            <h4>Ciencia 4</h4>
            <p>Descripción</p>
            <div class="text-button-pay">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-04.jpg') !!}" alt="">
          <div class="down-content">
            <h4>Ingeniería 5</h4>
            <p>Descripción</p>
            <div class="text-button-pay">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-05.jpg') !!}" alt="">
          <div class="down-content">
            <h4>Ciencia 5</h4>
            <p>Descripción</p>
            <div class="text-button-free">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('estilo/assets/images/courses-01.jpg') !!}" alt="">
          <div class="down-content">
            <h4>Ingeniería 6</h4>
            <p>Descripción</p>
            <div class="text-button-pay">
              <a href="#">Ver más <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection()
