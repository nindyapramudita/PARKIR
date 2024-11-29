<?php
include "config.php";

if(isset($_POST['tambah2'])) {
    date_default_timezone_set("Asia/Singapore");
    $jam_masuk = date("Y-m-d H:i:s");
    $status = 'Belum Keluar';
    $id_karcis = substr(md5(mt_rand()), 0, 8);
    mysqli_query($koneksi,"insert into tb_masuk values('','$id_karcis','$_POST[id_jenis]','$jam_masuk','$status')");
    echo "<script>alert('Data Anda Tersimpan')</script>";
    header("Location: karcis_masuk.php? kode=$id_karcis & jam_masuk=$jam_masuk");
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
    <link rel="website icon" type="png" href="https://img.icons8.com/external-phatplus-lineal-color-phatplus/64/null/external-parking-map-phatplus-lineal-color-phatplus.png"> 
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
                <li>
                    <a href="bayar.php">
                        <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Pembayaran</span>
                    </a>
                </li>
                <li>
                    <a href="history.php">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">History</span>
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
            <div class="recent--patients">
                <div class="title">
                <img src="https://img.icons8.com/external-phatplus-lineal-color-phatplus/64/null/external-parking-map-phatplus-lineal-color-phatplus.png"/>
                <h2 >Data Kendaraan</h2><br><br>
                </div>

                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Kode Karcis</th>
                                <th>Jenis Kendaraan</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Status</th>
                                <th>Nomor Plat</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "config.php";
                                
                                $sql = $koneksi->query("SELECT * FROM tb_masuk INNER JOIN jenis_kendaraan ON jenis_kendaraan.id_jenis = tb_masuk.id_jenis");
                                while ($data = $sql->fetch_assoc()) :
                            ?>
                            <tr>
                                <td><?php echo $data['kode_karcis'];?></td>
                                <td><?php echo $data['jenis_kendaraan'];?></td>
                                <td><?php echo $data['jam_masuk'];?></td>
                                <td><?php echo $data['jam_keluar'];?></td>
                                <td><?php echo $data['status'];?></td>
                                <td><?php echo $data['nomor_plat'];?></td>
                                <td><?php echo $data['total'];?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

               <!--<a href="tambah_data.php"><button type="submit" class="btn1" >Tambahkan</button></a>-->
                
    
            
    </section>
    <script src="assets/js/main.js"></script>
</body>

</html>

<!-- tombol cetak -->
<!-- <td><a href="cetak.php"><button type="submit" class="btn2" >Cetak</button></a></td> -->