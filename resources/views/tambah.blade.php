<!DOCTYPE html>
<html>
<head>
	<title>CLOZETTE INDONESIA</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/freelancer.css') }}">
</head>
<body>
<div class="container">
		<div class="card">
			<div class="card-body">
				<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
				<h3>Data Pegawai</h3>
			
				<a href="/pegawai"> Kembali</a>
				
				<br/>
				<br/>
			
				<form action="/pegawai/store" method="post">
					{{ csrf_field() }}
					Nama 	<input type="text" name="nama" required="required"> <br/>
					Jabatan 	<input type="text" name="jabatan" required="required"> <br/>
					Umur 	<input type="number" name="umur" required="required"> <br/>
					Alamat 	<textarea name="alamat" required="required"></textarea> <br/>
					<input class="btn btn-primary" type="submit" value="Simpan Data">
				</form>
				</div>
			</div>
		</div>
</body>
</html>