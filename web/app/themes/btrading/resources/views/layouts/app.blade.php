@include('partials.loader')
@include('partials.header')
@include('partials.menu')
<div data-inertia-container>
  
  <div class="cinema-light"></div>

  <main data-inertia-section class="main">
    <div class="has-background-dark" data-solar="container">
      @yield('content')
    </div>
  </main>
</div>
