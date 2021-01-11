function myMap() {
    var myLatLng = { lat: 51.22216153177665, lng: 6.779260633135348 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        draggable: true
    });

    marker.setMap(map);

    google.maps.event.addListener(marker, 'dragend', function (evt) {
        console.log(evt.latLng.lat() + " " + evt.latLng.lng());
    });
}