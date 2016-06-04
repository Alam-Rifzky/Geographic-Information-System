<script>
var koordinat=new google.maps.LatLng(<?php echo $detail->LANG.",".$detail->LON; ?>);
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
  content:"<?php echo $detail->LOKASI; ?>"
  });

//var infoStasiun({content:"Stasiun Bogor"});

//aktifasi Info Marker
infokoordinat.open(map,lok);
infoStasiun.open(map,m_stasiun);
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

<div id="overlay"></div>
  <div id="frame">
    <img src="<?php echo base_url("files/foto/$detail->GAMBAR");?>">
<p><?php
echo $detail->DESKRIPSI;
?>
</p>
  </div>

  <div id="frame-angkot">
<table class = "table">
        <thead>
          <tr>
          <th>Stasiun Bogor</th>
          <th>Terminal Baranangsiang</th>
        
          
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $detail->ANGKUTAN;?></td>
            <td><?php echo $detail->ANGKUTAN2;?></td>            
          </tr> 
        </tbody>

      </table>

  </div>

<div id="frame-tentang">
    <img src="<?php echo base_url("files/foto/gis.jpg");?>">
<p>Ada beberapa definisi dari sistem informasi geografis, diantaranya yaitu : <br>
1.  Menurut Petrus Paryono (1994) “Sistem Informasi Geografis adalah sistem
berbasis komputer yang digunakan untuk menyimpan, memanipulasi, dan
menganalisis informasi geografi.” <br>
2.  Menurut P. Ginting, Fathur Rahman M, dan S. Pinum (1996) “Sistem Informasi
Geografis merupakan sistem yang berfungsi untuk mengumpulkan, mengatur,
mengelola, menyiapkan dan menyajikan segala sesuatu yang berkaitan dengan
keadaan suatu wilayah.” <br>
3.   Menurut Amir Syarifuddin, Sri Sudarmi dan Usmaini (1996) “Sistem Informasi
Geografis adalah suatu sistem yang mengorganisir perangkat keras, perangkat
lunak, data geografis untuk mendayagunakan sistem penyimpanan, manipulasi,
analisis dan penyajian seluruh bentuk informasi.”.
</p>
  </div>

  <div id="frame-profil">
    <img src="<?php echo base_url("files/foto/Rifzky.jpg");?>">
<p>
Name       : Rifzky Alam <br>
Student ID : 16111197 <br>
Class      : 3 KA 20 <br>

  Rifzky Alam is a student of Gunadarma University, he's quite active in programming languange and sofware developer,
and major languange he's now enganged in is Visual Basic.Net. 
Dispite having an interest in sofware developer he also wanted to be a network engineer as he ever took a class of that scope.
with him having good belief in himself, he's now working out for his lifetime wish to be a moslem scholar in Information Technology. 
</p>
  </div>

<div id="header">
  <h1><strong>SISTEM INFORMASI GEOGRAFIS</strong><br/><small>TEMPAT-TEMPAT STRATEGIS KOTA BOGOR</small></h1>
</div>

<div id="content" style="background-image: url('<?php echo base_url("files/foto/$detail->GAMBAR");?>');background-repeat:no-repeat;background-size:cover")>

    <div id="map">
    <!-- isi buat Google Map -->    
    </div>

    <div id="opsi">

      <div id="judul-opsi"><p>Lokasi Wilayah</p></div>
      <ul class="nama-tempat" id="list-opsi">
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
      <option value="Choose here">Masukkan Alamat Asal</option>
      <option value="-6.594582, 106.790607">Stasiun Bogor</option>
      <option value="-6.604413, 106.806243">Terminal B Siang</option>
    </select>
  </div> 

    <div id="keterangan">
      <ul id="ket-opsi">
        <li id="desc">Deskripsi</li>
        <li id="angkot">Angkutan</li>
        <li><a href='javascript:getLocation();' onclick="getLocation()">Lokasi Saya</a></li>
        <li id="tentang">Tentang SIG</li>
        <li id="profil">Profilku</li>
      </ul>
    </div>

</div>
<script type="text/javascript" src="<?php echo base_url();?>files/js/style.js"></script>