<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<form method="POST" action="hasil_daftar.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm">
		<h1>Form Pendaftaran</h1>
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name="namleng" type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name="eml" type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea name="alm" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input name="notlpn" type="tel" class="form-control" id="telepon">
			</div>
			<input type="submit" name="submit" value="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>