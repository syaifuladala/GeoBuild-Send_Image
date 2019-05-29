<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>GeoBuild</title>
  </head>
  <body>
    

    <div class="container mt-5">
      	<div class="card" style="background-color: #050A27">
			<div class="card-body pl-5 pb-5">
				<div class="row main mt-5">
					<img src="Icon/icon_GB-white.png" width="30%" class="bg-img">
					<h1 class="display-3">Save Your Building <br> with <span>GeoBuild</span></h1>
					<div class="col-md-10">
						<p>Rekayasa Proyeksi Konstrusi Bangunan Berbasis Aplikasi dengan Parameter Kebencanaan Geologi.</p>
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
      	</div>
    </div>


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