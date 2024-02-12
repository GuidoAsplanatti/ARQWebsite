function onLoadMap() {
    var map = new Microsoft.Maps.Map(document.getElementById('mapContainer'), {
        credentials: 'ApoYMlspwO6CAraKKDGz3BnLGxZzp3_TAJwB2dzrbj_4OjvffvMH6vY7f05i4jCl',
        center: new Microsoft.Maps.Location(-31.391450, -58.017508), // Latitud y longitud de la ubicación
        zoom: 10 // Nivel de zoom inicial
    });
}