<?php 
$elektro = 
[
    [
        "gambar" => "../img/1.jpg",
        "namaelektronik" => "Televisi",
        "garansi" => "2 tahun",
        "harga" => "Rp 1.999.000",
    ],
    [
        "gambar" => "../img/2.jpg",
        "namaelektronik" => "Komputer",
        "garansi" => "2 tahun",
        "harga" => "Rp 4.042.000",
    ],
    [
        "gambar" => "../img/3.jpg",
        "namaelektronik" => "Lampu",
        "garansi" => "1 tahun",
        "harga" => "  Rp 16.100 ",
    ],
    [
        "gambar" => "../img/4.jpg",
        "namaelektronik" => "Air Conditioner",
        "garansi" => "2 tahun",
        "harga" => "Rp 2.329.000",
    ],
    [
         "gambar" => "../img/5.jpg",
         "namaelektronik" => "Mesin Cuci",
         "garansi"=> "3 tahun",
         "harga" => "Rp 1.129.000",
    ],
    [
         "gambar" => "../img/6.jpg",
         "namaelektronik" => "Handphone",
         "garansi" => "3 tahun",
         "harga" => "Rp 3.999.000",
    ],
    [
         "gambar"  => "../img/7.jpg",
        "namaelektronik" => "DVD Player",
        "garansi" => "1 tahun",
        "harga" => "Rp 157.000 ",
    ],
    [
        "gambar"  => "../img/8.jpeg",
        "namaelektronik" => "Kipas Angin",
        "garansi"  => "1 tahun",
        "harga"  => "Rp 60.000",
    ],
    [
        "gambar"  => "../img/9.jpg",
        "namaelektronik"=> "Radio",
         "garansi" => "1 tahun",
        "harga" => "Rp 85.000 ",
    ],
    [
         "gambar"  => "../img/10.jpg",
        "namaelektronik" => "Magic Com",
         "garansi" => "2 tahun",
        "harga" => "Rp 265.000 ",
    ]
];
?>

<html>
    <head>
        <title>latihan 5b</title>
    </head>
    <style>
        table{
            padding: auto;
            border : 1px solid black;
            text-align : center;
            font-size : 20px;
            background-color: gray;
            margin-left:565px;
            position: fixed;
        }
        td{
            padding : 15px;
        }
        h3{
            text-align : center;
            font-size : 30px;
        }
    </style>
    <body>
        <h3>Daftar Barang Elektronik</h3>
<table>
<tr>
<th>Nama elektronik</th>
</tr>
            <?php foreach ($elektro as $elektro) : ?>
            <tr>
            <td><a href="latihan5c.php?namaelektronik= <?= $elektro['namaelektronik']; ?> 
                &gambar= <?= $elektro['gambar']; ?> 
                &garansi= <?= $elektro['garansi']; ?> 
                &harga= <?= $elektro['harga']; ?>">

            <?= $elektro['namaelektronik']; ?> </a> </td>
             </tr>
            <?php endforeach ?>
           
            </table>
    </body>
</html>
