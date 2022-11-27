<?php


include("libreria/principal.php");

plantilla::aplicar();
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    .leaflet-container {
        height: 400px;
        width: 600px;
        max-width: 100%;
        max-height: 100%;
    }
</style>

<div class="container">
    <div id="map" style="width: 1800px; height: 600px;"></div>

</div>

<script>
    var map = L.map('map').setView([19.0062842, -71.1035911], 8);

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var datax = <?php echo json_encode(manejador_caso::dataMapa()) ?>

    for (c in datax) {
        caso = datax[c];
    }

    var marker = L.marker([caso.lat, caso.lng]).addTo(map)
        .bindPopup('<b>Robo</b><br /> Fecha:'+caso.fecha+'').openPopup();
</script>