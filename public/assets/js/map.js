var map = L.map('map').setView([49.18373250839423, 6.495766064418013], 10);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19
}).addTo(map);

var marker = L.marker([49.18373250839423, 6.495766064418013]).addTo(map);
var marker = L.marker([49.29223117101525, 6.534012822090064]).addTo(map);