<?php
include "config.php";

if(isset($_POST['tambah1'])) {

    mysqli_query($koneksi,"insert into jenis_kendaraan set
    id_jenis = '',
    jenis_kendaraan = '$_POST[jenis_kendaraan]',
    tarif = '$_POST[tarif]'");

    echo "<script>alert('Data Anda Tersimpan')</script>";
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Parkir Area</title>
    <link rel="website icon" type="png" href="https://img.icons8.com/doodle/48/null/retro-car.png"> 
</head>

<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Parkir<span>Area</span></h2>
        </div>
        
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="Index.php" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="jenis_kendaraan.php">
                        <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                        <span class="sidebar--item">Jenis Kendaraan</span>
                    </a>
                </li>
                <li>
                    <a href="data_kendaraan.php">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Data Kendaraan</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                <a href="markir.php">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Markir</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">

            <div class="recent--patients">

            <div class="header">
                <h2>Tambah Jenis</h2>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="hal-body">
                    <div class="form-group"><br>
                        <label class="control-label" for="jenis_kendaraan">Jenis kendaraan</label><br>
                    <input type="text" name="jenis_kendaraan" class="control-label" id="jenis_kendaraan" require> 
                    </div>

                    <div class="form-group"><br>
                        <label class="control-label" for="tarif">Tarif</label><br>
                    <input type="text" name="tarif" class="control-label" id="tarif" require> 
                    </div>
                </div>

                <br><br>
                    <a href="jenis_kendaraan.php"><button type="button" class="btn1" >Kembali</button></a>
                    <input type="submit" class="btn1" name="tambah1" value="Simpan">
                
            </form>

                
</body>

</html>