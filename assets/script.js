function iniciarMap(){
    var coord = {lat:-31.39141707170465 ,lng: -58.017525273008715};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}