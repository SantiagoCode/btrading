@if(!is_front_page())
  @include('partials.featured')
@endif


<section id="footer" class="footer is-full-height has-background-dark">

  <div class="container">
    
    <img class="has-margin-bottom-40-desktop has-margin-bottom-20-touch" src="{!!get_field('footer_logo', 'options')!!}" alt="logo btrading">
    
    <h1 class="calculate has-text-light has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="200">
      {!!get_field('footer_title', 'options')!!}
    </h1>

    <div class="columns redes is-mobile has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="300">
   
      @fields('footer_social_repetidor', 'options')
      <a href="@sub('footer_social_link', 'url')" class="column">
        <img src="@sub('footer_social_logo')" alt="social media">
      </a>
      @endfields
   
    </div>

    <div class="politicasyderechos" data-inertia data-inertia-reveal data-inertia-delay="400">
      <a class="legalidades has-margin-right-40 has-text-light">
        {!!get_field('footer_logo', 'options')!!}
      </a>
      <a class="legalidades has-margin-right-40 has-text-light">
        {!!get_field('footer_logo', 'options')!!}      
      </a>
      <a class="legalidades has-margin-right-40 has-text-light">
        {!!get_field('footer_logo', 'options')!!}
      </a>
      <a class="legalidades has-text-light">
        {!!get_field('footer_logo', 'options')!!}
        <span class="has-text-weight-bold">
          {!!get_field('footer_logo', 'options')!!}
        </span> .
      </a>
    </div>

  </div>

</section>
