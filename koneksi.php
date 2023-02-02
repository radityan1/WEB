<?php
$connect=mysqli_connect("localhost","root","","siswa");

if(!$connect){
    echo "Koneksi Gagal";
    die();
}
?>