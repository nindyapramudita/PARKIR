<?php

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

    <div class="judul"  style="background-color: #; border: 1px solid #17202A; height: 270px;  padding: 5px; text-align: center; width: 270px; margin-left: 30%; ">
    <center><h1>Parkir Area</h1>
    <h6> &copy; Parking app project 2023</h6>
    <br>


<p>Masuk : <?php echo $jam_masuk= $_GET['jam_masuk'];?></p><br>
<h4>Kode Karcis</h4>
<h1><?php echo $kode= $_GET['kode'];?></h1><br>
<p>Karcis harap disimpan</p>
<p>jangan sampai hilang.</p>
<p>Terima Kasih</p></center>
</div>

 <script>
    window.print();
</script> 


</body>
</html>