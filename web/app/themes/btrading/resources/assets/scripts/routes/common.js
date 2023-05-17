import { Solar } from '../solar';

export default {
  init() {
    // Funcionamiento del navbar con el menu
    const menu = document.querySelector('#full_menu');
    const cotizacion = document.querySelector('#cotizacion');
    const menuText = document.querySelector('.menuText');

    const triggerMenu = document.querySelector('#open_menu');
    const triggerServicios = document.querySelector('#servicios');
    const triggerCloseServicios = document.querySelector('#closeServicios');

    const disabilinizador = el => {
      el.classList.toggle('is-disabled');

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
  },
  finalize() {
    Solar.start();
  },
};
