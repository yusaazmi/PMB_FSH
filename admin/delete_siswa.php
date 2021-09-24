<?php
include '../koneksi.php';
if( isset($_GET['id']) ){

    // ambil id dari query string
    $No_Pendaftaran= $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM table_pendaftaran WHERE No_Pendaftaran=$No_Pendaftaran";
    $query = mysqli_query($dbc, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('Berhasil Hapus!');window.location='data_pendaftaran.php';</script>";
    } 
    else {
        die ("gagal menghapus...");
    }
} 

 else {
    die("akses dilarang...");
 }


?>