<?php
include "config.php";

if(isset($_POST['tambah1'])) {
    date_default_timezone_set('Asia/kuala_lumpur');
    $jam_masuk = date('Y-m-d H:i:s');
    $status = 'Belum Keluar';
    $id_karcis = substr(md5(mt_rand()), 0, 8);
    mysqli_query($koneksi,"insert into tb_masuk values('','$id_karcis','$_POST[id_jenis]','$jam_masuk','','','$status','','')");
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
    <link rel="stylesheet" href="css/style_markir.css">
  
  
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Parkir Area</title>
    <link rel="website icon" type="png" href="https://img.icons8.com/external-phatplus-lineal-color-phatplus/64/null/external-parking-map-phatplus-lineal-color-phatplus.png"> 
</head>

<body>
    
    
    <div class="pesan">
        <img src="https://img.icons8.com/external-phatplus-lineal-color-phatplus/64/null/external-parking-map-phatplus-lineal-color-phatplus.png"/>
        <h1>Selamat Datang</h1>

</div>    
    <div class="container">
        <form method="post" >
        <?php foreach ($jenis as $j) : ?>
            <label>
                <input type="radio" name="id_jenis" value="<?= $j['id_jenis'] ?>">
                <span><?= $j['jenis_kendaraan'] ?></span>
            </label>
            <?php endforeach; ?>
            <br><br>
            
           <input type="submit" class="btn1" name="tambah1" value="Cetak Sekarang">

        </form><br><br><br><br><br><br><br><br>
        <a href="index.php"><input type="submit" class="btn3" name="tambah1" value="Kembali"></a>
        
        </div>
   

    

</body>
</html>