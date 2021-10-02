<?php
include ('../koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];


$query = "INSERT INTO table_admin (Username,Password,Nama) values ('$username','$password','$nama')";

// var_dump($query);
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));

    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='data_admin.php';</script>";
    }
    else
    {
        echo "gagal";
    }

?>