<?php
include 'koneksi.php';

$id_user = $_POST['id_user'];
$foto = $_FILES['bukti_pembayaran']['name'];
$tmp = $_FILES['bukti_pembayaran']['tmp_name'];

$gambar = date('dmYHis').$foto;

$path2 = 'assets/surat_keterangan/'.$gambar;
move_uploaded_file($tmp,$path2);

    $query = "INSERT INTO table_pembayaran (No_Pendaftaran,bukti_pembayaran,status_pembayaran) values ('$id_user','$gambar','Belum Diverifikasi')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));

    
        echo "<script>alert('Berhasil Upload Bukti Pembayaran! Admin Akan Mengecek Pembayaran Anda');window.location='about.php';</script>";

?>