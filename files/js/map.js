//tempat masukin lokasi GoogleMap
var myCenter=new google.maps.LatLng(-6.597929, 106.798718);
var myStation=new google.maps.LatLng(-6.594582, 106.790607);
var PlazaJambu2 = new google.maps.LatLng(-6.568955, 106.808739);
var BatuTulis = new google.maps.LatLng(-6.624114, 106.808718);
var BTM = new google.maps.LatLng(-6.564214, 106.791303);
var Terminal_BSiang = new google.maps.LatLng(-6.604413, 106.806243);
var Istana_Bogor = new google.maps.LatLng(-6.598477, 106.795171);
var RS_KaryaBhakti = new google.maps.LatLng(-6.580731, 106.778284);
var RSI_Bogor = new google.maps.LatLng(-6.559074, 106.792167);
var Atang_sanjaya =new google.maps.LatLng (-6.541124, 106.754723);
var Ekalokasari_Plaza =new google.maps.LatLng(-6.621474, 106.816931);
var IPB_D3 = new google.maps.LatLng(-6.587897, 106.801031);
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();


function initialize(){
  directionsDisplay = new google.maps.DirectionsRenderer();
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };

var map=new google.maps.Map(document.getElementById("map"),mapProp);
directionsDisplay.setMap(map);
//posisi dirimu


//---------------------------------------------------------


//posisi marker
var marker=new google.maps.Marker({
  position:myCenter,
  });
var marker2=new google.maps.Marker({
  position:myStation,
  });

var m_BTM=new google.maps.Marker({
  position:BTM,
  });

var m_jambu2=new google.maps.Marker({
  position:PlazaJambu2,
  });

var m_batuTulis=new google.maps.Marker({
  position:BatuTulis,
  });

var m_BSiang=new google.maps.Marker({
  position:Terminal_BSiang,
  });

var m_IstanaBogor=new google.maps.Marker({
  position:Istana_Bogor,
  });

var m_RSKaryaBakti=new google.maps.Marker({
  position:RS_KaryaBhakti,
  });

var m_RSIBogor =new google.maps.Marker({
  position:RSI_Bogor,
  });

var m_atangSanjaya=new google.maps.Marker({
  position:Atang_sanjaya,
  });


var m_ELOS=new google.maps.Marker({
  position:Ekalokasari_Plaza,
  });

var m_IPB=new google.maps.Marker({
  position:IPB_D3,
  });

//set Posisi di dalem map
marker.setMap(map);
marker2.setMap(map);
m_IPB.setMap(map);
m_ELOS.setMap(map);
m_RSIBogor.setMap(map);
m_BSiang.setMap(map);
m_RSKaryaBakti.setMap(map);
m_atangSanjaya.setMap(map);
m_batuTulis.setMap(map);
m_IstanaBogor.setMap(map);
m_jambu2.setMap(map);
m_BTM.setMap(map);



//deskripsi di atas marker
var infowindow = new google.maps.InfoWindow({
  content:"Kebun Raya Bogor"
  });
  
var infoStasiun = new google.maps.InfoWindow({
  content:"Stasiun Bogor"
  });

var info_IPB = new google.maps.InfoWindow({
  content:"Insitut Pertanian Bogor D3"
  });

var info_ELOS = new google.maps.InfoWindow({
  content:"Ekalokasi Plaza"
  });

var info_RSI = new google.maps.InfoWindow({
  content:"Rumah Sakit Islam Bogor"
  });

var info_BSiang = new google.maps.InfoWindow({
  content:"Terminal Baranang Siang Bogor"
  });

var info_IstanaBogor = new google.maps.InfoWindow({
  content:"Istana Bogor"
  });

var info_jambu2 = new google.maps.InfoWindow({
  content:"Plaza Jambu2"
  });

var info_BTM = new google.maps.InfoWindow({
  content:"Bogor Trade Mall"
  });

var info_RSKaryaBakti = new google.maps.InfoWindow({
  content:"Rumah Sakit Karya Bakti"
  });

var info_BatuTulis = new google.maps.InfoWindow({
  content:"Prasasti Batu Tulis"
  });

var info_AtangSanjaya = new google.maps.InfoWindow({
  content:"Lapangan Terbang Atang Sanjaya"
  });


//aktifasi Info Marker
infoStasiun.open(map,marker2);
infowindow.open(map,marker);
info_IPB.open(map,m_IPB);
info_ELOS.open(map,m_ELOS);
info_RSI.open(map,m_RSIBogor);
info_BSiang.open(map,m_BSiang);
info_IstanaBogor.open(map,m_IstanaBogor);
info_BTM.open(map,m_BTM);
info_jambu2.open(map,m_jambu2);
info_RSKaryaBakti.open(map,m_RSKaryaBakti);
info_BatuTulis.open(map,m_batuTulis);
info_AtangSanjaya.open(map,m_atangSanjaya);

}
google.maps.event.addDomListener(window, 'load', initialize);

function calcRoute() {
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}
