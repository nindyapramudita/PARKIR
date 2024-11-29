<?php

include('config.php');

$kode=$_POST['id_masuk']?? '8cf74cee';
// $kode = $_POST['id_masuk'];
$idJenis = null;
$data = [];

date_default_timezone_set('Asia/kuala_lumpur');
$waktuKeluar = date('Y-m-d H:i:s');
$waktuMasuk = null;


$getwaktu = mysqli_query($koneksi, "SELECT * FROM tb_masuk INNER JOIN jenis_kendaraan ON tb_masuk.id_jenis = jenis_kendaraan.id_jenis WHERE kode_karcis='$kode' AND status = 'Belum Keluar'");

    while ($hasil = mysqli_fetch_assoc($getwaktu)) {
        
        $waktuMasuk = $hasil['jam_masuk'];
        $idJenis = $hasil['id_jenis'];
        $data = $hasil;

        // $data['jenis_kendaraan'] = $hasil['jenis_kendaraan'];
        

    $getBiaya = mysqli_query($koneksi, "SELECT * FROM jenis_kendaraan WHERE id_jenis='$idJenis'");
        while ($result = mysqli_fetch_array($getBiaya)) {
            $biaya = $result['tarif'];
        }
}

$waktu = strtotime($waktuKeluar) - strtotime($waktuMasuk);
$jam = floor($waktu / (60 * 60));
$menit = $waktu - $jam * (60 * 60);
$durasi = $jam . ' jam ' . ceil($menit / 60) . ' menit';

$jamTarif = ceil($waktu / (60 * 60));
$total = $jamTarif * $biaya;

$data['total_tarif'] = $total;
$data['jam_keluar'] =$waktuKeluar;
$data['selisih'] =$durasi;




echo json_encode($data);

// var_dump($waktuKeluar, $WaktuMasuk, $waktu, $jam);

?>