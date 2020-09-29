<?php 
require 'function.php';
if (isset($_POST['submit'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('Data Berhasil ditambahkan!');
		document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
			alert('Data gagal ditambahkan!');
			document.location.href = 'index.php';
			</script>";
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data Elektronik</title>
 </head>
 <body>
 	<form action="" method="post">
 		<label for="gambar">Gambar :</label><br>
 		<input type="text" name="gambar" id="gambar"><br><br>
 		<label for="nama">Nama Elektronik :</label><br>
 		<input type="text" name="nama" id="nama" autofocus="on"><br><br>
 		<label for="garansi">Garansi :</label><br>
 		<input type="text" name="garansi" id="garansi"><br><br>
 		<label for="harga">Harga :</label><br>
 		<input type="text" name="harga" id="harga"><br><br>
 		
 	

 		<input type="submit" name="submit" id="submit">
 		 		<button class="back"><a href="index.php">Kembali</a></button>
 	</form>
 </body>
 </html>