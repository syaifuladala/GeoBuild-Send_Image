<?php
    include('koneksi.php');
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    
    $latitude=round($lat,2);
    $longitude=round($lng,2);


    $sql = mysqli_query ($koneksi, "SELECT * FROM data_kebencanaan WHERE lat = $latitude && lng = $longitude")
	or die (mysqli_error());
		while($query = mysqli_fetch_array($sql)){
			$persen_banjir = $query['banjir'];
            $persen_gempa = $query['gempa'];
            $persen_tsunami = $query['tsunami'];
            $nama_daerah = $query['nama_daerah'];
        }
    // header("location:GeoBuildApp.php?persen_banjir=$persen_banjir&persen_gempa=$persen_gempa&persen_tsunami=$persen_tsunami");
    header("location:hasil_analisis.php?persen_banjir=$persen_banjir&persen_gempa=$persen_gempa&persen_tsunami=$persen_tsunami&lat=$lat&lng=$lng&nama_daerah=$nama_daerah");
?>