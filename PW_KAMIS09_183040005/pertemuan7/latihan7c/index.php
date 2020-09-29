<?php 

require 'function.php';
$mobils = query("Select * FROM mobil") ;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<a href="tambah.php">Tambah Data Mobil</a>
	<br><br>
	<table border="1px" cellpadding="2px">
		<thead>
			<tr>	
				<th>#</th>
				<th>Opsi</th>
				<th>Foto</th>
				<th>Nama Mobil</th>
				<th>Merk Mobil</th>
				<th>Asal Negara</th>
				<th>Tahun Awal Produksi</th>
				<th>Jenis Mobil</th>
			</tr>
		</thead>
			<tbody>
				<?php $no=1; ?>
				<?php foreach ($mobils as $car):?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td>
							<a href="hapus.php?ID=<?=$car['ID'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">Hapus</a>
							<a href="">Edit</a>
						</td>
						<td> <img width="100px" src="../assets/img/<?php echo $car['foto'] ?>">
						</td>
						<td>
							<?php echo $car['namamobil']; ?>
						</td>
						<td>
							<?php echo $car['merkmobil']; ?>
						</td>
						<td>
							<?php echo $car['asalnegara']; ?>
						</td>
						<td>
							<?php echo $car['tahunawalproduksi']; ?>
						</td>
						<td>
							<?php echo $car['jenismobil']; ?>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
	</table>
</body>
</html>


