<!DOCTYPE html>
<html>
<head>
    <title>latihan 5c</title>
</head>
<style>
        table{
            border : 1px solid black;
            text-align : center;
            font-size : 20px;
            background-color: gray;
        }
        td{
            padding : 15px;
        }
        h3{
            text-align : center;
            font-size : 30px;
        }
        button {margin-left: 650px}
    </style>
<body>
<?php 
    if (!isset($_GET['ID'])) {
        header('location : latihan6c.php');
        exit;
    }
    require 'functions.php';
    $ID=$_GET['ID'];
    $car = query("SELECT * FROM elektronik WHERE ID = $ID")[0];
 ?>
    <h3>Daftar Elektronik</h3>
    <table border="1px">
    <tr>
        <th>Gambar</th>
        <th>Nama elektronik</th>
        <th>Garansi</th>
        <th>Harga</th>
        
    </tr>
    <tr>
    <td><img width="300px" src="../../img/<?= $car['foto']; ?>" alt ="gambar"></td>
   
    <td><?= $car['namaelektronik']; ?></td>
    
    <td><?= $car['garansi']; ?></td>

    <td><?= $car['harga']; ?></td>

    
    
    </tr>
    </table>
    <form method="post">
    <button><a href="latihan6c.php"> kembali</a></button>
</form>
</body>
</html>