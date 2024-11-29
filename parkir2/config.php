<?php
$koneksi = mysqli_connect("localhost","root","","parkir");
//("localhost","493789","area25","493789");
// $koneksi = mysqli_connect("localhost","root","","parkir");


if (mysqli_connect_errno()){
    echo "koneksi database gagal :".mysqli_connect_error();
}

?>