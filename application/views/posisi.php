
<script>
//tempat masukin lokasi GoogleMap
var koordinat=new google.maps.LatLng(<?php echo $LANG.",".$LON; ?>);
var myStation=new google.maps.LatLng(<?php echo $awal;?>);
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function initialize()
{
   directionsDisplay = new google.maps.DirectionsRenderer();
var mapProp = {
    center:koordinat,
	zoom:16,
	panControl:true,
	zoomControl:true,
	mapTypeControl:true,
	scaleControl:true,
	overviewMapControl:true,
	mapTypeId:google.maps.MapTypeId.HYBRID
  };

var map=new google.maps.Map(document.getElementById("map"),mapProp);
directionsDisplay.setMap(map);
//posisi marker

var lok=new google.maps.Marker({
  position:koordinat,
  });

//var m_stasiun = new google.map.marker({position:myStation,animation:google.maps.Animation.BOUNCE});

//set Posisi di dalem map
lok.setMap(map);
//m_stasiun.setMap(map);

//deskripsi di atas marker  
var infokoordinat = new google.maps.InfoWindow({
  content:"<?php echo $LOKASI; ?>"
  });

//var stasiunBogor = new google.maps.InfoWindow({content:"Stasiun  Bogor"});

//aktifasi Info Marker
infokoordinat.open(map,lok);
//stasiunBogor.open(map,m_stasiun);
}
google.maps.event.addDomListener(window, 'load', initialize);

function calcRoute() {
  var start = document.getElementById('start').value;
  
  var request = {
      origin:start,
      destination:koordinat,
      travelMode: google.maps.TravelMode.DRIVING
  };

  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

</script>

<div id="content">
  

    <div id="map">
    <!-- isi buat Google Map -->    
    </div>

    <div id="opsi">
      <h3>Lokasi Wilayah</h3>
      <ul class="nama-tempat">
        <?php 
        foreach ($peta as $key => $value) {
        echo "<a href='".base_url('peta/kunjungi/'.$value->LANG.'/'.$value->LON)."'><li>".$value->LOKASI."</li></a>";
        }
        ?>
      </ul>
    </div>
<div id="panel">
    <b>Mulai: </b>
    <select id="start" onchange="calcRoute()">
      <option>Masukkan Asal Tujuan</option>
      <?php 
        foreach ($peta as $key => $value) {
        echo "<option value='".$value->LANG.','.$value->LON."'>".$value->LOKASI."</option>";
        }
        ?>
      <option value="-6.594582, 106.790607">Stasiun Bogor</option>
      <option value="-6.604413, 106.806243">Terminal B Siang</option>
    </select>
  </div>

    <div id="keterangan">
      <ul id="ket-opsi">
        <li id="desc">Deskripsi</li>
        <li id="angkot">Angkutan</li>
        <li><a href='javascript:getLocation();' onclick="getLocation()">Lokasi Saya</a></li>
        <li>Tentang SIG</li>
        <li>Profilku</li>
      </ul>
    </div>

</div>