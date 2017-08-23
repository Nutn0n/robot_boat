/* Global Variable

setLocation = location pinned on map
w a s d = movement
q e r = ok, start, stop

/*  Start Code */

var  setLocation = 0;
var w,a,s,d = 0;

function updateControl(FW,BW,R,L,OK,ON,OFF,LAT,LONG){
  $.ajax({
        url: "update_index.php",
        type: "POST",
        data: "{'forward':"+FW+",'backward':"+BW+",'righ':"+R+",'left':"+L+",'ok':"+OK+",'on':"+ON+",'off':"+OFF+",'lat':"+LAT+",'long':"+LONG+"}",
        data: "forward="+FW+"&backward="+BW+"&righ="+R+"&left="+L+"&ok="+OK+"&on="+ON+"&off="+OFF+"&lat="+LAT+"&long="+LONG,
        cache: false,
        async:false,
        success: function(data){
          //alert(data);
        }
    });
}

sendLocation = function(){
  /* Function goes here */
  alert("user set location to "+myLatlng);
  updateControl(0,0,0,0,0,0,0,parseFloat($('#latbox').val()),parseFloat($('#lngbox').val()));
  alert(parseFloat($('#latbox').val()));
}

goLeft = function() {
  a = 4;
  /* or do something */
  updateControl(0,0,0,a,0,0,0,0,0);
}


goRight = function () {
  d = 2;
    /* or do something */
  updateControl(0,0,d,0,0,0,0,0,0);
}


goFoward = function() {
  w = 1;
    /* or do something */
  updateControl(w,0,0,0,0,0,0,0,0);
}


goBackward = function () {
  s = 3;
    /* or do something */
  updateControl(0,s,0,0,0,0,0,0,0);
}

ok = function () {
  q = 5;
    /* or do something */
  updateControl(0,0,0,0,q,0,0,0,0);
}

start = function () {
  e = 6;
  alert("start");
    /* or do something */
  updateControl(0,0,0,0,0,e,0,0,0);
}

stop = function () {
  r = 7;
    alert("stop");
    /* or do something */
  updateControl(0,0,0,0,0,0,r,0,0);
}

resetVariable = function() {
  w = 0;
  a = 0;
  s = 0;
  d = 0;
  q = 0;
  e = 0;
  r = 0;
  updateControl(0,0,0,0,0,0,0,0,0);
}

/* Maps */


    // global "map" variable
    var map = null;
    var marker = null;

    // popup window for pin, if in use
    var infowindow = new google.maps.InfoWindow({
        size: new google.maps.Size(150,50)
        });

    // A function to create the marker and set up the event window function
    function createMarker(latlng, name, html) {

    var contentString = html;

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString);
        infowindow.open(map,marker);
        });

    google.maps.event.trigger(marker, 'click');
    return marker;

}

    var myLatlng = new google.maps.LatLng(13.910231,100.51267);


    // create the map
    var myOptions = {
        zoom: 19,
        center: myLatlng,
        mapTypeControl: false,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: false,
        mapTypeId: 'roadmap',
        styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#181818"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1b1b1b"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#2c2c2c"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8a8a8a"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#373737"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3c3c3c"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3d3d3d"
      }
    ]
  }
]
    }


    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    // establish the initial marker/pin
    var image = 'pin.png';
    marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image,
      title:"Property Location"
    });

    // establish the initial div form fields
    formlat = document.getElementById("latbox").value = myLatlng.lat();
    formlng = document.getElementById("lngbox").value = myLatlng.lng();

    // close popup window
    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });

    // removing old markers/pins
    google.maps.event.addListener(map, 'click', function(event) {
        //call function to create marker
         if (marker) {
            marker.setMap(null);
            marker = null;
         }


        var image = 'pin.png';
        var myLatLng = event.latLng ;

        marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image,
            title:"Property Location"
        });

        // populate the form fields with lat & lng
        formlat = document.getElementById("latbox").value = event.latLng.lat();
        formlng = document.getElementById("lngbox").value = event.latLng.lng();



    });
