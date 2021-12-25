<?php
include '../koneksi.php';
if( isset($_GET['id']) ){

    // ambil id dari query string
    $id_pengumuman= $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM table_pengumuman WHERE id_pengumuman=$id_pengumuman";
    $query = mysqli_query($dbc, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('Berhasil Hapus!');window.location='data_pengumuman.php';</script>";
    } 
    else {
        die ("gagal menghapus...");
    }
} 

 else {
    die("akses dilarang...");
 }


?>