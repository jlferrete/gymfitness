jQuery(document).ready($ => {

    $('.site-header .menu-principal .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });

    //Agregar Slider
    $('.listado-testimoniales').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false
    });



    //Mapa de Leaflet

    const lat = document.querySelector('#lat').value,
        lng = document.querySelector('#lng').value,
        direccion = document.querySelector('#direccion').value;

    if (lat && lng && direccion) {

        var map = L.map('mapa').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([lat, lng]).addTo(map)
            .bindPopup(direccion)
            .openPopup();

    }

});