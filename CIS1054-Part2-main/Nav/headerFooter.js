function burgshow() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    } 
  }

  function burghide() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
}
 }

 var map = L.map('map').setView([35.89275748785538, 14.504974052144172], 15)

L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=yRXaTEUYutp5xQ7q0b3i', {
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',

}).addTo(map);

var circle = L.circle([35.89275748785538, 14.504974052144172], {
  color: 'pink',
  fillColor: '#f03',
  fillOpacity: 0.1,
  radius: 200
 }).addTo(map);

circle.bindPopup("<b><i>Location of Fork</i></b>").openPopup();