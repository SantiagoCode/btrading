<nav class="navbar is-flex is-fixed-top columns is-justify-content-space-between has-padding-50-desktop has-padding-30-touch" data-cursor-stick data-cursor="-menu" style="background: transparent; mix-blend-mode: difference;">
  <div class="column is-4 is-flex is-align-items-center">
    <a id="" class="icon has-text-dark" href="{{home_url()}}">
      <img src="@asset('images/navbar-logo.png')" alt="">
    </a>
  </div>

  <div class="column is-4 is-flex is-align-items-center is-justify-content-center is-hidden-touch">
    <a href="{{home_url()}}" class="name is-size-7 has-text-primary">
      <span>TRADING MARKETING AGENCY</span>
    </a>
  </div>

  <div class="column is-4 is-flex is-align-items-center is-justify-content-end">
    <div id="open_menu" class="call-to-action is-size-7 has-text-grey has-text-primary">
      <span class="has-text-primary menuText">menú</span>
      <i class="icon has-margin-left-10">
        <img src="@asset('images/menu.png')" alt="menu">
      </i>
    </div>
  </div>
</nav>