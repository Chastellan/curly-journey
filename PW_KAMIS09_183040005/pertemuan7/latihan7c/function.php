<?php
// function untuk koneksi ke DB


function koneksi (){
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_183040005") or die ("Database salah!");

    return $conn;
}
// end of function

//function untuk query

function query($sql) {
    $conn = koneksi();
    $results = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($results)){
        $rows[]= $row;
    };

    return $rows;
}
// end of function
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $garansi = htmlspecialchars($data['merk']);
    $harga = htmlspecialchars($data['asal']);
    
    $query_tambah = "INSERT INTO elektro Values('','$gambar','$nama','$garansi','$harga')";

mysqli_query($conn, $query_tambah);

return mysqli_affected_rows($conn);
}
function hapus($ID) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektro WHERE ID = $ID");

    return mysqli_affected_rows($conn);
}
?>