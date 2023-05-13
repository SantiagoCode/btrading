@if(!is_front_page())
  @include('partials.featured')
@endif


<section id="footer" class="footer is-full-height has-background-dark">

  <div class="container" data-inertia data-inertia-speed="-1">
    
    <img class="has-margin-bottom-40-desktop has-margin-bottom-20-touch" src="@asset('images/logo.png')" alt="logo btrading">
    
    <h1 class="calculate has-text-light has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="200">
      ¿Qué esperas para cambiar tu futuro financiero?
    </h1>

    <div class="columns redes is-mobile has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="300">
      <a class="column">
        <img src="@asset('images/icono-youtube.png')" alt="Youtube">
      </a>
      <a class="column">
        <img src="@asset('images/icono-facebook.png')" alt="Facebook">
      </a>
      <a class="column">
        <img src="@asset('images/icono-instagram.png')" alt="Instagram">
      </a>
    </div>

    <div class="politicasyderechos" data-inertia data-inertia-reveal data-inertia-delay="400">
      <a class="legalidades has-margin-right-40 has-text-light">
        Política de privacidad
      </a>
      <a class="legalidades has-margin-right-40 has-text-light">
        Aviso legal
      </a>
      <a class="legalidades has-margin-right-40 has-text-light">
        Política de cookies
      </a>
      <a class="legalidades has-text-light">
        Copyright © 2023. Btrading Media. Built by <span class="has-text-weight-bold">Movida Company™️</span> .
      </a>
    </div>

  </div>

</section>
