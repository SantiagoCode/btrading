<section id="hero" data-cursor="-inverse" class="is-flex is-relative is-align-items-center has-background-dark is-full-height is-primary" data-cursor-text="Empieza Ahora">
  
    @include('partials.pseudo-planet')


    <div class="hero-body container-is-fluid" data-inertia data-inertia-speed="-1">

        <div class="planet-button-light is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30 has-text-weight-bold" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
          <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
          <span class="">{!!get_field('hero_subtitle', 'options')!!}</span>
        </div>

        <h1 class="calculate has-text-light has-margin-bottom-40" data-inertia data-inertia-reveal data-inertia-delay="400">
          {!!get_field('hero_title_part_a', 'options')!!}<span class="has-text-weight-bold">{!!get_field('hero_title_part_b', 'options')!!}</span> {!!get_field('hero_title_part_c', 'options')!!}
        </h1>

        <div class="control-buttons columns is-multiline" data-inertia data-inertia-reveal data-inertia-delay="700">
          <div class="column is-4-desktop is-3-widescreen is-10-touch planet-button-primary is-size-7 is-size-6-fullhd over-overlay is-fluid-4 with-content" href="">
              <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
              <span class="">
                  <span class="has-text-weight-bold">
                  </span>
                  <p class="servicios-content">
                    {!!get_field('hero_content_a', 'options')!!}
                  </p>
              </span>
          </div>

          <div class="column is-4-desktop is-3-widescreen is-10-touch planet-button-primary is-size-7 is-size-6-fullhd over-overlay is-fluid-4 with-content" href="">
              <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
              <span class="">
                  <span class="has-text-weight-bold">
                  </span>
                  <p class="servicios-content">
                    {!!get_field('hero_content_a', 'options')!!}
                  </p>
              </span>
          </div>
        </div>
          
      </div>

      <div class="conjunto-hero is-flex is-justify-content-center" data-inertia data-inertia-speed="-1" data-inertia-reveal data-inertia-delay="700">
        <img src="{!!get_field('hero_footer_img', 'options')!!}" alt="img">
      </div>

</section>
    













































    {{-- <div class="columns">
      <div class="column is-4">
        <h1 class="title is-1">
          <div data-inertia data-inertia-reveal data-inertia-delay="600">Bienvenido a</div>
          <div data-inertia data-inertia-reveal data-inertia-delay="900">Movidagrafica</div></span>
        </h1>
        <p data-inertia data-inertia-reveal data-inertia-delay="1200" class="subtitle has-margin-top-20 has-margin-bottom-20">
          Aquí es donde las cosas magnificas empiezan a pasar. <b>¡Acompañanos en el viaje!</b>
        </p>
        <div class="buttons">
          <a href="" data-gravity data-cursor-stick data-cursor="-menu" class="button is-primary is-large has-padding-20"><span class="icon is-large"><i data-feather="user"></i></span></a>
          <a href="" data-gravity data-cursor-text="😈" class="button is-primary is-large has-padding-20">Inicia ahora</a>
          <a href="" data-gravity data-cursor-video="@asset('images/3263666610.mp4')" data-cursor-text="Esto es un Video" class="button is-large has-padding-20 is-white is-outlined">Quiero ver más</a>
          <a href="" data-gravity data-cursor-img="@asset('images/2471234.jpg')" data-cursor-text="Esto es una Imágen" class="button is-large has-padding-20 is-primary is-inverted">¿Quienes son ustedes?</a>
        </div>
      </div>
    </div> --}}