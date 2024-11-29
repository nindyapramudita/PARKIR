<?php
include('config.php');

$kode = $_POST['id_karcis'];

date_default_timezone_set("Asia/Singapore");
$jam_masuk = date('Y-m-d H:i:s');

$getwaktu = mysqli_query($koneksi, "SELECT * FROM tb_masuk WHERE kode_karcis='$kode' AND status = 'parkir' AND id_jenis = 1");
    while ($data = mysqli_fetch_array($getwaktu)) {
        $waktuMasuk = $data['waktu_masuk'];
        $idJenis = $data['id_jenis'];

    $getBiaya = mysqli_query($connect, "SELECT * FROM jenis_kendaraan WHERE id_jenis='$idJenis'");
        while ($result = mysqli_fetch_array($getBiaya)) {
            $biaya = $result['tarif'];
        }
}

$waktu = strtotime($waktuKeluar) - strtotime($waktuMasuk);
$jam = floor($waktu / (60 * 60));
$menit = $waktu - $jam * (60 * 60);
// $durasi = $jam . ' jam ' . ceil($menit / 60) . ' menit';

$jamTarif = ceil($waktu / (60 * 60));
$total = $jamTarif * $biaya;

$data = [];
$data['tarif'] = $total;

echo json_encode($data);

?>



// form


<div class="dashboard-content px-3 pt-4">

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i> Aksi
    </div>

    <div class="card-body">
        <a href="rodaduakeluar.php" class="btn btn-primary"> Parkir Keluar </a> 
    </div>
</div> 

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i> Parkir Keluar
    </div>

    <div class="card-body">
            <form action="rodaduaproses.php" method="post">
                <label class="form-label"> <h4>Kode Karcis :</h4> </label>
                <input type="text" class="form-control" name="kode" id="kode" required>
                <label class="form-label"> <h4>Nomor Polisi :</h4> </label>
                <input type="text" class="form-control" name="nopol" id="nopol" required>
                <label class="form-label"> <h4>Tarif :</h4> </label>
                <input type="text" class="form-control" name="tarif" id="tarif" disabled>
                <br>
                <input type="submit" name="keluar" class="btn btn-primary">
            </form>
        </div>
    </div> 
</div>
    

</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
$(function(){
        $('#kode').change(function() {
            let kode=$('#kode').val();
            $.ajax({
                url: "get_rodadua.php",
                type : "POST",
                data: {id_kode: kode},
                dataType: "json",
                success: function(data) {
                    $('#tarif').val(data.tarif);
                }
            })
        })

    })

</script>