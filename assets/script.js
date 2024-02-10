// function iniciarMap(){
//     var coord = {lat:-31.39141707170465 ,lng: -58.017525273008715};
//     var map = new google.maps.Map(document.getElementById('map'),{
//       zoom: 15,
//       center: coord
//     });
//     var marker = new google.maps.Marker({
//       position: coord,
//       map: map
//     });
// }

function onLoadMap() {
    var map = new Microsoft.Maps.Map(document.getElementById('mapContainer'), {
        credentials: 'ApoYMlspwO6CAraKKDGz3BnLGxZzp3_TAJwB2dzrbj_4OjvffvMH6vY7f05i4jCl',
        center: new Microsoft.Maps.Location(-31,391450, -58,017508), // Latitud y longitud de la ubicación
        zoom: 10 // Nivel de zoom inicial
    });
}