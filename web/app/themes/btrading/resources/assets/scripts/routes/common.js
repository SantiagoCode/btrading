import { Solar } from '../solar';

export default {
  init() {
    // Bulma navbar .is-active
    document.addEventListener('DOMContentLoaded', () => {
      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll('.navbar-burger'),
        0
      );

      // Add a click event on each of them
      $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {
          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);

          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
        });
      });
    });

    window.onload = function() {
      // your code
      // Funcionamiento del navbar con el menu
      const menu = document.querySelector('#full_menu');
      const cotizacion = document.querySelector('#cotizacion');
      const menuText = document.querySelector('.menuText');

      const triggerMenu = document.querySelector('#open_menu');
      const triggerServicios = document.querySelector('#servicios');
      const triggerCloseServicios = document.querySelector('#closeServicios');

      const disabilinizador = el => {
        el.classList.toggle('is-disabled');

        if (!el.classList.contains('is-disable')) {
          const btnSubmitCotizacion = document.querySelector(
            '#btnSubmitCotizacion'
          );
          btnSubmitCotizacion.addEventListener(
            'click',
            () => chooseData(btnSubmitCotizacion),
            true
          );
        }

        if (el == menu) {
          if (menuText.innerHTML === 'menú') {
            menuText.innerHTML = 'close';
          } else {
            menuText.innerHTML = 'menú';
          }
        }

        if (el.querySelectorAll('[data-inertia-reveal]')) {
          el.querySelectorAll('[data-inertia-reveal]').forEach(element => {
            element.classList.toggle('is-revealed');
          });
        }
      };

      triggerMenu.onclick = e => {
        disabilinizador(menu);
      };

      triggerServicios.onclick = e => {
        disabilinizador(cotizacion);
      };

      triggerCloseServicios.onclick = e => {
        disabilinizador(cotizacion);
      };

      menu.querySelectorAll('a').forEach(element => {
        element.onclick = () => {
          disabilinizador();
        };
      });

      if (!menu.classList.contains('is-disabled')) {
        document.querySelectorAll('a').forEach(element => {
          element.onclick = () => {
            disabilinizador();
          };
        });
      }

      // data submit
      setTimeout(() => {
        const btnSubmitContacto = document.querySelector('.submitContacto');
        btnSubmitContacto.addEventListener(
          'click',
          () => chooseData(btnSubmitContacto),
          true
        );
      }, 1000);

      const chooseData = function(e) {
        if (e.classList.contains('isMessage')) {
          let form = document.querySelector('#formMessage');
          validacion(form);
        } else if (e.classList.contains('isCotizacion')) {
          let form = document.querySelector('#formServicios');
          validacion(form);
        }
      };

      const validacion = form => {
        // Verificar campo de nombre
        const nameInput = form.querySelector('input[name="name"]');
        if (nameInput.value.trim() === '') {
          feedBack('Necesitas llenar el campo de nombre.');
          return;
        } else if (/\d/.test(nameInput.value)) {
          feedBack(
            'El campo de nombre no puede contener caracteres numéricos.'
          );
          return;
        } else {
          // console.log('Valor del campo de nombre:', nameInput.value);
        }

        // Verificar campo de email
        const emailInput = form.querySelector('input[name="email"]');
        if (emailInput.value.trim() === '') {
          feedBack('Necesitas llenar el campo de email.');
          return;
        } else if (
          !emailInput.value.includes('@') ||
          !emailInput.value.endsWith('.com')
        ) {
          feedBack(
            'El campo de email no es válido. Debe incluir "@" y terminar en .com'
          );
          return;
        } else {
          // console.log('Valor del campo de email:', emailInput.value);
        }

        // Verificar campo de teléfono
        const phoneInput = form.querySelector('input[name="phone"]');
        if (phoneInput) {
          if (phoneInput.value.trim() === '') {
            feedBack('Necesitas llenar el campo de teléfono.');
            return;
          } else if (!/^\d+$/.test(phoneInput.value)) {
            feedBack(
              'El campo de teléfono solo puede contener caracteres numéricos.'
            );
            return;
          } else {
            // console.log('Valor del campo de teléfono:', phoneInput.value);
          }
        }

        // Verificar campo de teléfono
        const companyInput = form.querySelector('input[name="company"]');
        if (companyInput) {
          if (companyInput.value.trim() === '') {
            feedBack('Necesitas llenar el campo de compañia.');
            return;
          } else {
            // console.log('Valor del campo de compañia:', companyInput.value);
          }
        }

        // Verificar campo de teléfono
        const messageInput = form.querySelector('textarea[name="message"]');
        if (messageInput.value.trim() === '') {
          feedBack('Necesitas llenar el campo de mensaje.');
          return;
        } else {
          // console.log('Valor del campo de mensaje:', messageInput.value);
        }

        let formData = new FormData(form);
        sendData(form, formData);
      };

      const sendData = (form, chosenForm) => {
        chosenForm.append('action', 'procesar_formulario');

        fetch(window.location.origin + '/wp/wp-admin/admin-ajax.php', {
          method: 'POST',
          mode: 'no-cors',
          headers: { 'Content-Type': 'application/json' },
          body: chosenForm,
        })
          .then(response => response.text())
          .then(data => {
            if (data == 0) {
              console.log('Registro Exitoso.');
            } else {
              console.log('Registro fallido.');
            }
          })
          .then(() => {
            form.querySelector('input[name="name"]').value = '';
            form.querySelector('input[name="email"]').value = '';
            form.querySelector('textarea[name="message"]').value = '';

            if (form.querySelector('input[name="phone"]')) {
              form.querySelector('input[name="phone"]').value = '';
            } else if (form.querySelector('input[name="company"]')) {
              form.querySelector('input[name="company"]').value = '';
            }

            feedBack('Registro Exitoso.');
          })
          .catch(err => {
            console.log(err);
            feedBack('Registro Exitoso.');
          });
      };

      const feedBack = retorno => {
        let contenedor = document.querySelector('#contenedorFeedBack');
        contenedor.innerHTML = retorno;

        let contenedor2 = document.querySelector('#contenedorFeedBack2');
        contenedor2.innerHTML = retorno;

        setTimeout(() => {
          contenedor.innerHTML = '';
          contenedor2.innerHTML = '';
        }, 2000);
      };
    };
  },
  finalize() {
    Solar.start();
  },
};
