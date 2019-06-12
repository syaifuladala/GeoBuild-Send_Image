<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- font googlefont API -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,600&display=swap" rel="stylesheet">

<!-- css -->
<link rel="stylesheet" href="style.css">

<!--googlemapsAPI-->
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
// variabel global marker
var marker;

function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
    // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}

function initialize() {
	var propertiPeta = {
		center:new google.maps.LatLng(-7.783772, 110.373055),
		zoom:9,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);	
	// even listner ketika peta diklik
	google.maps.event.addListener(peta, 'click', function(event) {
		taruhMarker(this, event.latLng);
	});	
}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);

</script>


<title>GeoBuild</title>
</head>
<body>


<div class="container mt-5">
	<div class="card" style="background-color: #050A27">
	<img src="Icon/icon_GB-white.png" width="30%" class="bg-img">
		<div class="card-body pl-5 pb-5">
			<div class="row main mt-5">
			<h1 class="display-3">Save Your Building <br> with <span>GeoBuild</span></h1>
				<div class="col-md-10">
				<br><p>Rekayasa Proyeksi Konstrusi Bangunan Berbasis Aplikasi dengan Parameter Kebencanaan Geologi.</p>
					<div class="col-md-6">
						<form action="proses_kirim.php" method="post" enctype="multipart/form-data">
						<div class="custom-file mb-2">
						<input type="file" class="custom-file-input" id="customFile" name="image">
						<label class="custom-file-label" for="customFile">Pilih Berkas</label>
						</div>
						<button type="submit" name="submit" class="btn btn-lg">PROYEKSIKAN</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<center>
		<div class="bencana">
		<h2>Tentukan Lokasi Bangunan</h2>
		<div id="googleMap" style="width:90%;height:380px;"></div>
			<div class="formMap">
			<form action="" method="post">
				<input type="text" id="lat" name="lat" value="">
				<input type="text" id="lng" name="lng" value="">
			</form>
			</div>			
			<h2>ANALISIS KEBENCANAAN GEOBUILD</h2>
			<!-- <div class="bencana column-bencana">
				<p>BANJIR
				<div class="skala-bar" style="--width: 10" data-label="Loading..."></div>
				</p>
				<p>GEMPA BUMI</p>
				<p>TSUNAMI</p>
			</div> -->

			<table class="tabel-bencana" border="0" cellpadding="10">
				<tr>
					<td colspan="2" align="center" ><h5>Banjir</h5></td>
					<td colspan="2" align="center" ><h5>Gempa</h5></td>
					<td colspan="2" align="center" ><h5>Tsunami</h5></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><div class="skala-bar" style="--width: 10" data-label="Besar"></div></td>
					<td colspan="2" align="center"><div class="skala-bar" style="--width: 10"></div></td>
					<td colspan="2" align="center"><div class="skala-bar" style="--width: 10"></div></td>
				</tr>
				<tr>
					<td align="left">rendah</td>
					<td align="right">tinggi</td>

					<td align="left">rendah</td>
					<td align="right">tinggi</td>

					<td align="left">rendah</td>
					<td align="right">tinggi</td>
				</tr>
				<tr>
					<td colspan="2">Keterangan<br><input type="text" class="form-control" disabled></td>
					<td colspan="2">Keterangan<br><input type="text" class="form-control" disabled></td>
					<td colspan="2">Keterangan<br><input type="text" class="form-control" disabled></td>
				</tr>
			</table>

		</div>
		</center>
	</div>
</div>


<!-- SkalaBar JS -->
<script>
const progressBar = document.getElementsByClassName('skala-bar')[0]
setInterval(() => {
  const computedStyle = getComputedStyle(progressBar)
  const width = parseFloat(computedStyle.getPropertyValue('--width')) || 0
  progressBar.style.setProperty('--width', width + .1)
}, 5)
</script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
	var fileName = $(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>