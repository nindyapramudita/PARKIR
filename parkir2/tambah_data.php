<?php
include "config.php";

if(isset($_POST['tambah'])) {
    $jam_masuk = date('Y-m-d H:i:s');
    $status = 'Belum Keluar';
    $id_masuk ='KRCS';

    mysqli_query($koneksi,"insert into tb_masuk values('$id_masuk[id_masuk]','$_POST[id_jenis]','$jam_masuk','$status')");
    echo "<script>alert('Data Anda Tersimpan')</script>";
}

$query = "SELECT * FROM jenis_kendaraan";
$jenis = mysqli_query($koneksi, $query);

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
                <h2>Tambah Data</h2>
            </div>
            <form method="post" enctype="multipart/form-data">
                    <div class="form-group"><br>
                        <label class="control-label" for="nomor_polisi">Nomor Polisi</label><br>
                    <input type="text" name="nomor_polisi" class="control-label" id="nomor_polisi" require> 
                        </div>  

                    <div class="form-group"><br>
                        <label class="control-label" for="id_jenis">Jenis kendaraan</label><br>
                        <select name="id_jenis" style="width:162px;" readonly>
                            <option selecte value="">    </option>
                            <?php foreach ($jenis as $j) : ?>
                                <option value="<?= $j['id_jenis'] ?>"><?= $j['jenis_kendaraan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                
    

                <br><br>
                    <a href="data_kendaraan.php"><button type="button" class="btn1" >Kembali</button></a>
                    <input type="submit" class="btn1" name="tambah" value="Simpan" >
                
            </form>

                
</body>

</html>
