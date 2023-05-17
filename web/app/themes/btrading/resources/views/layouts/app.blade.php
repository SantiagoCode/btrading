@include('partials.loader')
@include('partials.header')
@include('partials.menu')
@include('partials.cotizacion')
<div data-inertia-container>
  
  <div class="cinema-light"></div>

  <main data-inertia-section class="main">
    <div class="has-background-dark" data-solar="container" style="overflow: hidden;">
      @yield('content')
    </div>
  </main>
</div>
