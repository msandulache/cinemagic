import './bootstrap';
import Alpine from 'alpinejs';
import jQuery from 'jquery';
import ModalVideo from "modal-video/lib/core/index.js";
import Swal from "sweetalert2/src/sweetalert2.js";

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

window.Alpine = Alpine;

Alpine.start();

window.$ = jQuery;

new ModalVideo('.js-modal-btn');

$('.delete-confirmation').on('click', function (e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
        title: 'Esti sigur?',
        text: 'Stergerea va fi definitiva',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Da, vreau sa sterg',
        cancelButtonText: "Anulare",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});


$('#buyBtn').on('click', function (e) {

    if($('#showtime').val() === '') {
        e.preventDefault();
        Swal.fire({
            title: "Informare",
            text: "Alege mai intai data si ora filmului din select",
            icon: "info"
        });
    } else {
        window.location.href = '/seats/' + $('#showtime').val();
    }
});



// Burger menus
document.addEventListener('DOMContentLoaded', function () {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    const searchButton = document.querySelectorAll('.searchButton');
    const searchInput = document.querySelectorAll('.animate-searchInput');

    if (searchButton.length && searchInput.length) {
        for (var i = 0; i < searchButton.length; i++) {
            searchButton[i].addEventListener('click', function () {
                for (var j = 0; j < searchInput.length; j++) {
                    searchInput[j].classList.remove('hidden');
                }
            });
        }
    }

});
