<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan 5d</title>
    <style>
    .kotak 
    {
        width: 40px;
        height: 40px;
        border: 1px solid;
        display: inline-block;
        line-height: 30px;
        text-align: center;
        margin : 2px;
        color: black;
    }

    .biru {
        background-color: blue;
    }

    .clear
    {
        clear: both;
    }
    </style>
</head>
<body>

<form method="post">
    <label> Masukan Angka : </label>
    <input type="text" name ="angka">
    <button type="submit">submit</button>
</form>
<br>
<?php
 if(isset($_POST['angka'])){
     $angka = $_POST['angka'];
     for ($x = $angka; $x >=1 ; $x--){
         for($z=1; $z <= $x; $z++){
             if($x %2 == 0){
                 echo "<div class='kotak'>$x</div>";
             }
             else {
                echo "<div class='kotak biru'>$x</div>";
             }
         }
         echo"<br>";
     }
 }

?>
</body>
</html>