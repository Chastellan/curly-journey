<?php
// function untuk koneksi ke DB


function koneksi (){
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_183040005") or die ("Database salah!");

    return $conn;
}
// end of function

//functon untuk query

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

?>