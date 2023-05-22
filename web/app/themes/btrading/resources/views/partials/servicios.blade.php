<section id="servicios" class="no-margin-section is-flex is-relative is-align-items-center has-background-primary is-full-height is-dark" data-cursor="-reverso" data-cursor-text="Empieza Ahora">
    
    <div class="container">

        <div class="has-padding-bottom-90-widescreen">
            <div class="planet-button-dark is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30 has-text-weight-bold" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
                <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                <span class="">
                    {!!get_field('servicios_subtitle', 'options')!!}
                </span>
            </div>
            <h1 class="calculate has-text-dark has-margin-bottom-40" data-inertia data-inertia-reveal data-inertia-delay="400">
                {!!get_field('servicios_title_part_a', 'options')!!}<span class="has-text-weight-bold">{!!get_field('servicios_title_part_b', 'options')!!}</span>{!!get_field('servicios_title_part_c', 'options')!!}
            </h1>
        </div>

        <div class="columns is-centered is-multiline">

            @fields('servicios_repetidor', 'options')
            <div class="column is-4-desktop is-12-mobile is-clickable" data-inertia data-inertia-reveal data-inertia-delay="700">
                <div class="planet-button-dark with-content" href="">
                    <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                    <span class="">
                        <span class="has-text-weight-bold">
                            @sub('servicios_title_card')
                        </span>
                        <p class="servicios-content">
                            @sub('servicios_content_card')
                        </p>

                        <div class="cotizar columns has-margin-top-10 is-align-items-center is-mobile">
                            <div class="column is-8">
                                <div class="blackline"></div>
                            </div>
                            <span class="cotizar has-text-weight-bold" style="flex: none;">
                                @sub('servicios_cotizar')
                            </span>
                        </div>
                    </span>
                </div>
            </div>
            @endfields

        </div>
    </div>
    
</section>