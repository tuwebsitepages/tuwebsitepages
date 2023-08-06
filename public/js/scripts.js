/*!
* Start Bootstrap - New Age v6.0.6 (https://startbootstrap.com/theme/new-age)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
*/
//
// Scripts
// 

// Ocultar el loader y mostrar el contenido una vez que la página haya cargado completamente


window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


  
window.addEventListener('load', function() {
    const loader = document.querySelector('.loader');
    const overlay = document.querySelector('.loading-overlay');
    const content = document.querySelector('.content');

    

    // Ocultar el loader y la capa blanca
    loader.style.display = 'none';
    overlay.style.opacity = 0;

    // Añadir una transición suave para mostrar el contenido
    setTimeout(function() {
      content.style.opacity = 1;
      content.style.pointerEvents = 'auto'; /* Habilitar eventos de clic en el contenido */
    }, 500); // 500ms es el tiempo de la transición especificado en el CSS
  });