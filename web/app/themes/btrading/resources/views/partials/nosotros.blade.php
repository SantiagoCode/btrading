<section id="nosotros" data-cursor="-inverse" class="is-flex is-relative is-align-items-center has-background-dark is-full-height is-primary" data-cursor-text="Sobre Nosotros" style="overflow: visible;">

    @include('partials.pseudo-planet-inverse')

    <div class="container is-flex is fluid" data-inertia data-inertia-speed="-1">
        <div class="columns is-multiline">

            <div class="column is-12-touch is-10-desktop is-8-widescreen has-padding-bottom-90-widescreen has-margin-bottom-90-widescreen">

                <div class="planet-button-light is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30 has-text-weight-bold" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
                    <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                    <span class="">{!!get_field('nosotros_subtitle', 'options')!!}</span>
                </div>

                <h1 class="calculate has-text-light has-margin-bottom-40" data-inertia data-inertia-reveal data-inertia-delay="400">
                    {!!get_field('nosotros_title', 'options')!!}
                </h1>

            </div>
        
            <div class="column is-12-touch is-10-desktop is-4-widescreen is-flex is-flex-direction-column is-justify-content-end" data-inertia data-inertia-reveal data-inertia-delay="700">

                <div class="planet-button-primary with-content has-margin-bottom-30" href="">
                    <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                    <span class="">
                        <span class="has-text-weight-bold">
                        </span>
                        <p class="servicios-content">
                            {!!get_field('nosotros_content_a', 'options')!!}
                        </p>
                    </span>
                </div>

                <div class="planet-button-primary with-content" href="">
                    <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                    <span class="">
                        <span class="has-text-weight-bold">
                        </span>
                        <p class="servicios-content">
                            {!!get_field('nosotros_content_b', 'options')!!}
                        </p>
                    </span>
                </div>
                
            </div>

        </div>
    </div>
</section>