<section id="contacto" class="is-flex is-relative is-align-items-center has-background-dark is-full-height is-dark" data-cursor-text="Enviar">


    <div class="fondo-contacto" style="
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;">
        
        <img src="@asset('images/fondo-contacto.png')" alt="" class="" style="
            object-fit: cover;
            width: 100%;
            height: 100%;
            opacity: 0.5;">
    </div>


    <div class="container" data-inertia data-inertia-speed="-1">

        <div class="has-padding-bottom-90-widescreen">

            <a class="planet-button-light is-size-7 is-size-6-fullhd over-overlay has-margin-bottom-30" href="" data-inertia data-inertia-reveal data-inertia-delay="200">
                <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                <span class="">Contacto</span>
            </a>

            <h1 class="calculate has-text-light has-margin-bottom-40" data-inertia data-inertia-reveal data-inertia-delay="400">
                Atrévete con BTrading
            </h1>

        </div>

        <form action="" id="form" class="formulario">

            <div class="form-item has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="500">
                <label for="name"></label>
                <input class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" type="text" name="name" id="name" placeholder="Nombre">
            </div>
            <div class="form-item has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="600">
                <label for="email"></label>
                <input class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-item has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="700">
                <label for="phone"></label>
                <input class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" type="tel" name="phone" id="phone" placeholder="Teléfono">
            </div>

            <div class="form-item-textarea has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="800">
                <label for="message"></label>
                <textarea class="has-text-light has-padding-top-20 has-padding-bottom-20 has-padding-left-40 has-padding-right-40" name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
            </div>

            <div class="form-item-radiobtn has-margin-bottom-40-desktop has-margin-bottom-20-touch" data-inertia data-inertia-reveal data-inertia-delay="900">
                <div class="is-flex is-align-items-center has-margin-bottom-10">
                    <input class="has-text-primary" type="checkbox" id="aceptoNotificaciones" name="opciones-form" value="aceptoNotificaciones">
                    <label class="has-text-primary" for="aceptoNotificaciones">Quiero recibir noticias y comunicaciones sobre los servicios de Btrading</label>
                </div>
            
                <div class="is-flex is-align-items-center">
                    <input class="has-text-primary" type="checkbox" id="aceptoPoliticas" name="opciones-form" value="aceptoPoliticas">
                    <label class="has-text-primary" for="aceptoPoliticas">Acepto la política de privacidad y las condiciones de uso</label>
                </div>
            </div>

            <div class="btnSubmit has-text-light" data-inertia data-inertia-reveal data-inertia-delay="900">
                <span>Contactanos ahora</span>
                <span class="has-text-primary">*</span>
            </div>
        </form> 

    </div>

</section>