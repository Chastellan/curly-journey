<?php 
require 'functions.php';
$mobil = query("SELECT * FROM mobil")
?>

<html>
    <head>
        <title>Latihan 6b</title>
    </head>
    <style>
     
        h3{
            font-size : 60px;
        }
        .gambar {width: 50px};
        .container 
    </style>
    <body>
    
        <h3 text align="Center">Koleksi Mobil</h3>
    <div class="container">
        <?php
           foreach ($mobil as $car) :
        ?>
                <img width="250px" src="../../img/<?= $car ['foto'] ?>">
                <p class="namamobil"><?= $car['namamobil'] ?></p>
                <p><?= $car['merkmobil'] ?> </p>
                <p><?= $car['asalnegara'] ?> </p>
                <p><?= $car['tahunawalproduksi'] ?></p>
                <p><?= $car['jenismobil'] ?> </p>
        </div>
            <?php endforeach ?>
    </div>
		
    </body>
</html>
