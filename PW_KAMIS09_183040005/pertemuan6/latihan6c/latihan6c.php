<?php 
require 'functions.php';
$elektro = query("SELECT * FROM elektro")
?>

<html>
    <head>
        <title>Latihan 6c</title>
    </head>
    <style>
     
        h3{
            font-size : 60px;
        }
        .gambar {width: 50px};
        
    </style>
    <body>
    
        <h3 text align="Center">Daftar Barang</h3>
    <div class="container">
        <?php
           foreach ($elektro as $elektro) :
        ?>
            <p><a href="profil.php?ID=<?=$elektro['ID']; ?>"><?= $elektro['namaelektronik']; ?></a></p>
      
            <?php endforeach ?>

		
    </body>
</html>
