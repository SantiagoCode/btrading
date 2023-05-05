import { Solar } from '../solar';

export default {
  init() {
    // Funcionamiento del navbar con el menu
    const menu = document.querySelector('#full_menu');
    const trigger = document.querySelector('#open_menu');

    const menu_action = () => {
      menu.classList.toggle('is-disabled');
      menu.querySelectorAll('[data-inertia-reveal]').forEach(element => {
        element.classList.toggle('is-revealed');
      });
    };

    trigger.onclick = () => {
      menu_action();
    };

    menu.querySelectorAll('a').forEach(element => {
      element.onclick = () => {
        menu_action();
      };
    });

    if (!menu.classList.contains('is-disabled')) {
      document.querySelectorAll('a').forEach(element => {
        element.onclick = () => {
          menu_action();
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
