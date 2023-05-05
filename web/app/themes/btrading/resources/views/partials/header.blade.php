<nav class="navbar is-fixed-top is-spaced" role="navigation" data-cursor-stick data-cursor="-menu" style="background: transparent;">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <div class="menu-trigger">
        <a id="open_menu" class="icon has-text-dark">
          <img src="@asset('images/navbar-logo.png')" alt="">
        </a>
      </div>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start has-margin-auto">
      <a class="navbar-item">
        <a href="{{home_url()}}" class="name is-size-7 has-text-primary">
          <span>TRADING MARKETING AGENCY</span>
        </a>
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div id="open_menu" class="call-to-action is-size-7 has-text-grey has-text-primary">
          <span class="has-text-primary">menú</span>
          <i class="icon has-margin-left-10">
            <img src="@asset('images/menu.png')" alt="">
          </i>
        </div>
      </div>
    </div>
  </div>
</nav>

