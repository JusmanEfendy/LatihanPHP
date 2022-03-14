<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "latihan_db";
$koneksi= mysqli_connect($server,$username,$pass);


if ($koneksi){
    $buka = mysqli_select_db($koneksi, $db);
    echo "Database Terhubung";
    if (!$buka){
        echo "Tidak Terhubung";
    
    }    
}else{
    echo "database error";
}    

?>