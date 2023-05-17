<div id="cotizacion" class="is-overlay is-disabled has-background-dark is-flex is-align-items-center is-justify-content-center" style="z-index: 99; position: fixed;">
    <div class="container has-padding-10-touch">
        <h1 class="title has-text-primary">
            Hagamos tu cotizacion
        </h1>
        <form action="" id="formServicios" class="formularioServicios">

            <div class="columns is-multiline has-margin-bottom-20">
                <div class="column is-6-desktop is-12-touch form-item py-0 has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="500">
                    <label class="has-text-dark" for="name"></label>
                    <input class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" type="text" name="name" id="name" placeholder="Nombre">
                </div>
                <div class="column is-6-desktop is-12-touch form-item py-0 has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="600">
                    <label class="has-text-dark" for="email"></label>
                    <input class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" type="email" name="email" id="email" placeholder="Email">
                </div>
            </div>

            <div class="form-item has-margin-bottom-20" data-inertia data-inertia-reveal data-inertia-delay="700">
                <label class="has-text-dark" for="Company"></label>
                <input class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" type="tel" name="Company" id="Company" placeholder="Compañia">
            </div>

            <div class="form-item-textarea has-margin-bottom-20" data-inertia data-inertia-reveal data-inertia-delay="800">
                <label class="has-text-dark" for="details"></label>
                <textarea class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" name="details" id="details" cols="30" rows="5" placeholder="Detalles del proyecto"></textarea>
            </div>

            <div class="columns is-multiline has-margin-bottom-20 has-padding-left-10-touch" style="justify-content: space-between">
                <div class="planet-button-primary is-size-6 is-size-6-fullhd over-overlay has-margin-top-30 has-font-weight-bold" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
                    <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                    <span class="">Cotizar ahora</span>
                </div>
                <div id="closeServicios" class="planet-button-primary is-size-7 is-size-6-fullhd over-overlay has-margin-top-30 has-font-weight-bold" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
                    <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                    <span class="">Cerrar cotizacion</span>
                </div>
            </div>
        </form>
    </div>
</div>