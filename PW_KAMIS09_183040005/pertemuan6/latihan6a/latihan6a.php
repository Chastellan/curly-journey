<?php 
$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
mysqli_select_db($conn, "pw_183040023") or die ("Database salah!");
?>

<html>
    <head>
        <title>Latihan 6a</title>
    </head>
    <style>
        h3{
            font-size : 30px;
        }
        .gambar {width: 50px}
    </style>
    <body>
    
        <h3 text align="Center">Koleksi Mobil</h3>
    <div class="container">
        <?php
            $results = mysqli_query($conn, "SELECT * FROM mobil");
            while ($row = mysqli_fetch_assoc($results)) {
        ?>
        <div class="content">
                <img width="250px" src="../../img/<?= $row ['foto'] ?>">
                <p class="namamobil"><?= $row['namamobil'] ?></p>
                <p><?= $row['merkmobil'] ?> </p>
                <p><?= $row['asalnegara'] ?> </p>
                <p><?= $row['tahunawalproduksi'] ?></p>
                <p><?= $row['jenismobil'] ?> </p>
        </div>
            <?php } ?>
    </div>
        
    </body>
</html>
