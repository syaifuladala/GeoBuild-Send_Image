<?php
	include('koneksi.php');
	if(isset($_POST['submit'])){
        $ext = end(explode('.',$_FILES['image']['name']));
        $name = "proyeksi_geobuild.".$ext;
        $path = "Hasil/".$name;
        $insert = "UPDATE GAMBAR SET nama = 'proyeksi_geobuild.$ext' WHERE id = '111' ";
		if(mysqli_query($koneksi,$insert)){
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
            if ($ext == "png") {
?>
                <script>
                    alert("Proyeksi Terkirim!");
                    window.location = "index.php";
                </script>
<?php
            } else {
?>
                <script>
                    alert("Format Gambar Harus .png !");
                    window.location = "index.php";
                </script>
<?php
            }
		}else{
?>
            <script>
                alert("Gagal! Silahkan Coba Lagi");
                window.location = "index.php";
            </script>
<?php
        }
	}
?>