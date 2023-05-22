<nav class="navbar is-flex is-fixed-top columns is-justify-content-space-between has-padding-50-desktop has-padding-30-touch" data-cursor-stick data-cursor="-menu" style="background: transparent; mix-blend-mode: difference;">
  <div class="column is-4 is-flex is-align-items-center">
    <a id="" class="icon has-text-dark" href="{{home_url()}}">
      <img src="{!!get_field('header_logo', 'options')!!}" alt="navbar-logo">
    </a>
  </div>

  <div class="column is-4 is-flex is-align-items-center is-justify-content-center is-hidden-touch">
    <a href="{{home_url()}}" class="name is-size-7 has-text-primary">
      <span>{!!get_field('header_phrase', 'options')!!}</span>
    </a>
  </div>

  <div class="column is-4 is-flex is-align-items-center is-justify-content-end">
    <div id="open_menu" class="call-to-action is-size-7 has-text-grey has-text-primary is-clickable">
      <span class="has-text-primary menuText">{!!get_field('header_burger_word', 'options')!!}</span>
      <i class="icon has-margin-left-10">
        <img src="{!!get_field('header_burger_icon', 'options')!!}" alt="menu">
      </i>
    </div>
  </div>
</nav>