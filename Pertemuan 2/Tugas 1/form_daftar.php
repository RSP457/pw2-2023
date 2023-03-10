
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		body {
            margin:10px	;
            background-color:grey;
            color:#fff;
        }
	</style>
</head>
<body>

	<div>
		<h1 class="text-center mt-3 text-light">Form Pendaftaran</h1>
		<form method="POST" action="hasil_daftar.php">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="tel" name="telepon" class="form-control" id="telepon">
			</div>
			<button class="btn btn-primary" name="submit" value="submit">Submit</button>
		</form>
	</div>
</body>
</html>
