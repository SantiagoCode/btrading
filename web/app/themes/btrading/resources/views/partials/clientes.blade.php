<section id="clientes" class="no-margin-section is-flex is-relative is-align-items-center has-background-primary is-full-height is-dark pb-0" data-cursor="-reverso" data-cursor-text="Empieza Ahora">

    <div class="scrollClientes" data-inertia data-inertia-speed="-2" data-inertia-direction="horizontal">
        <h1 class="has-text-dark">
            {!!get_field('clientes_title_slide_a', 'options')!!}
        </h1>
    </div>
    <div class="scrollExito" data-inertia data-inertia-speed="2" data-inertia-direction="horizontal">
        <h1 class="has-text-dark">
            {!!get_field('clientes_title_slide_b', 'options')!!}
        </h1>
    </div>

    <div class="container is-relative">

        <div class="planet-button-dark is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30 has-text-weight-bold" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
            <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
            <span class="">{!!get_field('clientes_subtitle', 'options')!!}</span>
        </div>

        <div class="people-container">
            <div class="barbara">

                <img src="{!!get_field('clientes_person_a', 'options')!!}" alt="" class="cliente"  data-inertia data-inertia-reveal data-inertia-delay="700">

                <div class="detallesCliente planet-button-dark is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30 has-text-weight-bold is-hidden-touch" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
                    <a href="{!!get_field('clientes_person_a', 'options')!!}" class="planet-button-dark with-content is-clickable">
                        <span class="">                      
                            <span class="has-text-weight-bold">
                                {!!get_field('clientes_person_a', 'options')!!}
                            </span>
                            <p class="servicios-content">
                                {!!get_field('clientes_person_a', 'options')!!}
                            </p>
                            <span class="icon has-margin-right-20 is-block"><i data-feather="circle"></i></span>
                        </span>
                    </a>
                </div>                
            </div>
            <div class="jon is-hidden-mobile" data-inertia data-inertia-speed="-2">

                <img src="{!!get_field('clientes_person_c', 'options')!!}" alt="" class="cliente"  data-inertia data-inertia-reveal data-inertia-delay="800">

                <div class="detallesCliente planet-button-dark is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30 has-text-weight-bold is-hidden-touch" href="" data-inertia data-inertia-reveal data-inertia-delay="200">               
                    <a href="" class="planet-button-dark with-content has-text-align-right is-clickable">
                        <span class="">                        
                            <span class="icon is-block has-margin-left-auto mr-0"><i data-feather="circle"></i></span>                        
                            <span class="has-text-weight-bold">
                                Jon
                            </span>
                            <p class="servicios-content">
                                @jontradercom
                            </p>                            
                        </span>
                    </a>                
                </div>                
            </div>
            <div class="guillermo is-hidden-mobile" data-inertia data-inertia-speed="-1">

                <img src="{!!get_field('clientes_person_b', 'options')!!}" alt="" class="cliente"  data-inertia data-inertia-reveal data-inertia-delay="900">

                <div class="detallesCliente planet-button-dark is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30 has-text-weight-bold is-hidden-touch" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
                    <a href="" class="planet-button-dark with-content is-clickable">
                        <span class="">
                            <span class="icon has-margin-right-20 is-block"><i data-feather="circle"></i></span>
                            <span class="has-text-weight-bold">
                                Guillermo
                            </span>
                            <p class="servicios-content">
                                @trifasickotrading
                            </p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

