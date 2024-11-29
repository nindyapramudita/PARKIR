
<?php
include "config.php";

if(isset($_POST['tambah2'])) {
    date_default_timezone_set('Asia/kuala_lumpur');
    $id_masuk = $_POST ['id_masuk'];
    $jam_masuk =$_POST ['jam_masuk'];
    $jam_keluar  = $_POST['jam_keluar'];
    $selisih          = $_POST['selisih'];
    $status          = 'Keluar';
    $nomor_plat      = $_POST['nomor_plat'];
    $total  = $_POST['total_tarif'];
    $id_jenis = $_POST['jenis_kendaraan'];
   
    // query SQL untuk insert data
    $query="UPDATE tb_masuk SET jam_keluar='$jam_keluar', selisih='$selisih', status='$status', nomor_plat='$nomor_plat', total='$total' where id_masuk='$id_masuk'";
    mysqli_query ($koneksi,$query);
    echo "<script>alert('Data Anda Tersimpan')</script>";
    header("Location: karcis_keluar.php? nomor_plat=$nomor_plat & jenis_kendaraan=$id_jenis & jam_masuk=$jam_masuk & jam_keluar=$jam_keluar & selisih=$selisih & total_tarif=$total");

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
                <h2 >Pembayaran</h2><br><br>
                </div>

                <form method="post" enctype="multipart/form-data">
                <div class="hal-body">
                    <div class="form-group"><br>
                        <label class="control-label" for="kode_karcis">Kode Karcis</label><br>
                    <input type="text" name="kode_karcis" class="control-label" id="kode_karcis" require> 
                    </div>

                    <input type="text" name="id_masuk" class="control-label" id="id_masuk" hidden> 
                    <input type="text" name="id_jenis" class="control-label" id="id_jenis" hidden> 

                    <div class="form-group"><br>
                        <label class="control-label" for="jenis_kendaraan">Jenis Kendaraan</label><br>
                    <input type="text" name="janis_kendaraan" class="control-label" id="jenis_kendaraan" require> 
                    </div>


                    <div class="form-group"><br>
                        <label class="control-label" for="jam_masuk">Jam Masuk</label><br>
                    <input type="text" name="jam_masuk" class="control-label" id="jam_masuk" require> 
                    </div>

                    <div class="form-group"><br>
                        <label class="control-label" for="jam_keluar">Jam Keluar</label><br>
                    <input type="text" name="jam_keluar" class="control-label" id="jam_keluar" require> 
                    </div>

                    <div class="form-group"><br>
                        <label class="control-label" for="selisih">Selisih Jam</label><br>
                    <input type="text" name="selisih" class="control-label" id="selisih" require> 
                    </div>

                    <div class="form-group"><br>
                        <label class="control-label" for="total_tarif">Total</label><br>
                    <input type="text" name="total_tarif" class="control-label" id="total_tarif" require> 
                    </div>

                    <div class="form-group"><br>
                        <label class="control-label" for="nomor_plat">Nomor Plat</label><br>
                    <input type="text" name="nomor_plat" class="control-label" id="nomor_plat" require> 
                    </div>
                </div>
                
    

                <br><br>
                  <input type="submit" class="btn1" name="tambah2" value="Cetak Sekarang">
                  <input type="reset" class="btn3">
                
            </form>

            
                </div>
            </div>
        </div>

               <!--<a href="tambah_data.php"><button type="submit" class="btn1" >Tambahkan</button></a>-->

               <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
               <script>
                

$(function(){
    console.log('data')
        $('#kode_karcis').change(function() {
            let kode=$('#kode_karcis').val();
            console.log(kode)
    
            $.ajax({
                url: "proses.php",
                type : "POST",
                data: {id_masuk: kode},
                dataType: "json",
                success: function(data) {
                    console.log(data)
                    $('#id_masuk').val(data.id_masuk)
                    $('#jenis_kendaraan').val(data.jenis_kendaraan)
                    $('#jam_masuk').val(data.jam_masuk)
                    $('#jam_keluar').val(data.jam_keluar)
                    $('#selisih').val(data.selisih)
                    $('#total_tarif').val(data.total_tarif)
                }
            })
        })

    })

</script>


            
    </section>
    <!-- <script src="assets/js/main.js"></script> -->
</body>

</html>

<!-- tombol cetak -->
<!-- <td><a href="cetak.php"><button type="submit" class="btn2" >Cetak</button></a></td> -->