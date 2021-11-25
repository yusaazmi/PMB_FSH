<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

    $query = "INSERT INTO table_contact (nama,email,subjek,pesan) values ('$nama','$email','$subjek','$pesan')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));

    
        echo "<script>alert('Berhasil Mengirim Pesan!');window.location='contact.php';</script>";

?>