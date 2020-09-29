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
    <h3>Daftar Barang Elektronik</h3>
    <table border="1px">
    <tr>
        <th>Gambar</th>
        <th>Nama Elektronik</th>
        <th>Garansi</th>
        <th>Harga</th>
    </tr>
    <tr>
    <td><img width="300px" src="<?= $_GET['foto']; ?>" alt ="foto"></td>
   
    <td><?= $_GET['namaelektronik']; ?></td>
    
    <td><?= $_GET['garansi']; ?></td>

    <td><?= $_GET['harga']; ?></td>
    
    </tr>
    </table>
    <form method="post">
    <button><a href="./latihan5b.php"> kembali</a></button>
</form>
</body>
</html>