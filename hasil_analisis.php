<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="Icon/icon_GB.png">


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


<title>Hasil Analisis</title>
</head>
<body>

<?php
	$persen_banjir = $_GET['persen_banjir'];
    $persen_gempa = $_GET['persen_gempa'];
	$persen_tsunami = $_GET['persen_tsunami'];
	$lat = $_GET['lat'];
	$lng = $_GET['lng'];
	$nama_daerah = $_GET['nama_daerah'];
?>

<div class="container mt-5">
	<div class="card" style="background-color: #050A27">
		<center>
		<div class="main">
		<!-- <img src="Icon/icon_GB-white.png" width="40%" class="bg-img"> -->
		<h1 class="display-3"> Analisis Kebencanaan <br> <span>GeoBuild</span></h1>
		<div class="bencana">
			<div class="tabel-overflow">
				<table class="tabel-bencana" border="0" cellpadding="10">
					<tr>
						<td colspan="6" align="center" >
						<h4>Koordinat : <?php echo $lat; ?> , <?php echo $lng; ?>
						<br> Nama Daerah : <?php echo $nama_daerah; ?> </h4></td>
					</tr>
					<tr>
						<td colspan="2" align="center" ><h5>Banjir</h5></td>
						<td colspan="2" align="center" ><h5>Gempa</h5></td>
						<td colspan="2" align="center" ><h5>Tsunami</h5></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="70" 
								aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $persen_banjir ?>%">
							</div>
						</td>
						<td colspan="2" align="center">
						<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="70" 
								aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persen_gempa ?>%">
							</div>
						</td>
						<td colspan="2" align="center"><div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="70" 
								aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persen_tsunami ?>%">
							</div>
						</td>
					</tr>
					<tr>
						<td align="left">rendah</td>
						<td align="right">tinggi</td>

						<td align="left">rendah</td>
						<td align="right">tinggi</td>

						<td align="left">rendah</td>
						<td align="right">tinggi</td>
					</tr>
					<!-- <tr>
						<td colspan="2">Keterangan<br><input type="text" class="form-control" disabled></td>
						<td colspan="2">Keterangan<br><input type="text" class="form-control" disabled></td>
						<td colspan="2">Keterangan<br><input type="text" class="form-control" disabled></td>
					</tr> -->
					<tr>
						<td>Prosedur <br> Evakuasi</td>
						<td><a href="evakuasi_banjir.php"><button class="btn btn-lg">Lihat</button></a></td>
						<td>Prosedur <br> Evakuasi</td>
						<td><a href="evakuasi_gempa.php"><button class="btn btn-lg">Lihat</button></a></td>
						<td>Prosedur <br> Evakuasi</td>
						<td><a href="evakuasi_tsunami.php"><button class="btn btn-lg">Lihat</button></a></td>
					</tr>
				</table>
			</div>
		</div>
		</div>
		</center>
	</div>
</div>

</body>
</html>