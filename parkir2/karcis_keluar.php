
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

    <div class="judulll"  style="background-color: #; border: 1px solid #17202A; height: 330px;  padding: 5px; text-align: center; width: 330px; margin-left: 30%; ">
    <center><h1>Parkir Area</h1>
    <h6> &copy; Parking app project 2023</h6>
    <br>
<p>Nomor Plat :<?php echo $nomor_plat= $_GET['nomor_plat'];?> </p>
<p>jenis kendaraan :<?php echo $id_jenis= $_GET['jenis_kendaraan'];?></p><br>

<p>Masuk      :<?php echo $jam_masuk= $_GET['jam_masuk'];?></p>
<p>keluar     :<?php echo $jam_keluar= $_GET['jam_keluar'];?></p><br>

<p>Durasi     :<?php echo $selisih= $_GET['selisih'];?></p>
<p>Petugas    : Nindya Pramudita</p><br>
<p>Total      : Rp<?php echo $total= $_GET['total_tarif'];?>,-</p> <br>
<h4>Terima Kasih. Hati-Hati  Di Jalan.</h4></center>
</div>

<script>
    window.print();
</script>

</body>
</html>