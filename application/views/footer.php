<footer>Copyright @ 2014 Universitas Gunadarma</footer>
<script>
var x = document.getElementById("posisi8");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML = "Browser ini tidak bisa meng akses Posisi Anda";}
  }
function showPosition(position)
  {
  	window.location = "<?php echo base_url('peta/posisisaya/');?>/"+position.coords.latitude + "/"+position.coords.longitude;
  }
</script>
</body>
</html>