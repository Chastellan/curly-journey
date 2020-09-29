<?php 

require 'function.php';
$elektros = query("Select * FROM elektro") ;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<a href="tambah.php">Tambah Data Elektronik</a>
	<br><br>
	<table border="1px" cellpadding="2px">
		<thead>
			<tr>	
				<th>#</th>
				<th>Opsi</th>
				<th>Gambar</th>
				<th>Nama Elektronik</th>
				<th>Garansi</th>
				<th>Harga</th>
				
			</tr>
		</thead>
			<tbody>
				<?php $no=1; ?>
				<?php foreach ($elektros as $elektro):?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td>
							<a href="">Hapus</a>
							<a href="">Edit</a>
						</td>
						<td> <img width="100px" src="../assets/img/<?php echo $elektro['gambar'] ?>">
						</td>
						<td>
							<?php echo $elektro['namaelektronik']; ?>
						</td>
						<td>
							<?php echo $elektro['garansi']; ?>
						</td>
						<td>
							<?php echo $elektro['harga']; ?>
						</td>
						
						
					</tr>
				<?php endforeach ?>
			</tbody>
	</table>
</body>
</html>


