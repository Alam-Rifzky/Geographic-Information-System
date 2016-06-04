
<script>
//tempat masukin lokasi GoogleMap
var koordinat=new google.maps.LatLng(<?php echo $awal;?>);
<?php 
foreach ($peta as $key => $value) { ?>
  var lokasi<?php echo $key;?> = new google.maps.LatLng(<?php echo $value->LANG.",".$value->LON; ?>);
<?php
}
?>


function initialize()
{
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

//posisi marker

var lok=new google.maps.Marker({
    position:koordinat,
  });
//set Posisi di dalem map
lok.setMap(map);

//deskripsi di atas marker  
var infokoordinat = new google.maps.InfoWindow({
  content:"<?php echo $LOKASI; ?>"
  });

//aktifasi Info Marker
infokoordinat.open(map,lok);

<?php 
foreach ($peta as $key => $value) { ?>
  var lok<?php echo $key;?> = new google.maps.Marker({
    position:lokasi<?php echo $key;?>,
  });
  //set Posisi di dalem map
  lok<?php echo $key;?>.setMap(map);
  //deskripsi di atas marker  
  var infokoordinat<?php echo $key;?> = new google.maps.InfoWindow({
    content:"<?php echo $value->LOKASI; ?>"
  });
  //aktifasi Info Marker
  infokoordinat<?php echo $key;?>.open(map,lok<?php echo $key;?>);
<?php
}
?>
//var stasiunBogor = new google.maps.InfoWindow({content:"Stasiun  Bogor"});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="content">
  
   <div class="content-n">
    <h2>Sekilas Tentang Kota Bogor</h2>
        <p>Kota Bogor merupakan kota strategis yang berdekatan dengan kawasan Ibukota Indonesia</p>
  </div> 

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