<div id="full_menu" class="full-menu is-overlay is-disabled" style="z-index: 999; position: fixed;">
  <div class="hero is-fullheight is-dark">
    <div class="is-overlay" style="mix-blend-mode: lighten">
      <div class="fibra-optica column is-3 is-paddingless is-offset-9">
        <div style="height: 100vh; width: 100%; background: url('@asset('images/fibra-optica.jpg')'); background-size: cover; background-position:center;">
        </div>
      </div>
    </div>
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-5">
            <div class="revealer" data-inertia data-inertia-reveal>
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu-column title is-2 has-text-weight-normal', 'echo' => false]) !!}
              @endif
            </div>
            <ul class="documents has-margin-top-70">
              <li data-inertia data-inertia-reveal data-inertia-delay="800">
                @set($footer_politica_privacidad, get_field('footer_politica_privacidad', 'options'))
                <a href="{{$footer_politica_privacidad['url']}}" data-cursor-text="+" class="legalidades has-margin-right-40 has-text-light title is-5 has-text-weight-normal">
                  {{$footer_politica_privacidad['title']}}
                </a>
              </li>
              <li data-inertia data-inertia-reveal data-inertia-delay="900" class="has-margin-top-10">
                @set($footer_aviso_legal, get_field('footer_aviso_legal', 'options'))
                <a href="{{$footer_aviso_legal['url']}}" data-cursor-text="+" class="legalidades has-margin-right-40 has-text-light title is-5 has-text-weight-normal">
                  {{$footer_aviso_legal['title']}}
                </a>
              </li>
            </ul>
          </div>
          <div class="column is-4">

            <div data-inertia data-inertia-reveal data-inertia-delay="100"  class="title is-7">Btrading</div>

            @fields('menu_links_internal_pages', 'options')
            <a href="@sub('menu_link', 'url')">
              <p  data-inertia data-inertia-reveal data-inertia-delay="200" data-cursor="-inverse" data-cursor-text="Leer" class="title is-4 has-text-weight-light is-block has-margin-bottom-10">@sub('menu_text_a')</p>
              <p  data-inertia data-inertia-reveal data-inertia-delay="400" data-cursor-text="Ir al Blog" class="is-size-7 is-block has-margin-bottom-30">@sub('menu_text_b')</p>
            </a>
            @endfields

            @set($menu_visitanos_link, get_field('menu_visitanos_link', 'options'))
            <div data-inertia data-inertia-reveal data-inertia-delay="600"  data-inertia data-inertia-reveal data-inertia-delay="500"  class="title is-7 has-margin-bottom-10 has-margin-top-30">{!!get_field('menu_visitanos', 'options')!!}</div>
            <a  data-inertia data-inertia-reveal data-inertia-delay="600" class="is-block" href="{{$menu_visitanos_link['url']}}" target="_blank">
              {{$menu_visitanos_link['title']}}
            </a>

            @set($menu_escribenos_link, get_field('menu_escribenos_link', 'options'))
            <div data-inertia data-inertia-reveal data-inertia-delay="600"  class="title is-7 has-margin-bottom-10 has-margin-top-30 ">{!!get_field('menu_escribenos', 'options')!!}</div>
            <a class="is-block" data-inertia data-inertia-reveal data-inertia-delay="600"  href="{{$menu_escribenos_link['url']}}">
              {{$menu_escribenos_link['title']}}
            </a>
          </div> 

        </div>
        
        <div class="hero-footer has-margin-left-30-touch" style="max-height: 150px">
            <div class="container">
              <div class="columns redes is-mobile has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="300">
            
                @fields('footer_social_repetidor', 'options')
                <a href="@sub('footer_social_link', 'url')" class="column">
                  <img src="@sub('footer_social_logo')" alt="social media">
                </a>
                @endfields

              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
