<?php
include ('../koneksi.php');

$file = $_FILES['file_pengumuman']['name'];
$tmp = $_FILES['file_pengumuman']['tmp_name'];

$file_pengumuman = date('dmYHis').$file;
$path = '../assets/pengumuman/'.$file_pengumuman;
$date = date("Y-m-d");
$status = $_POST['status'];

if(move_uploaded_file($tmp,$path)){

    $query = "INSERT INTO table_pengumuman (file,date,status) values ('$file_pengumuman','$date','$status')";
    
// var_dump($query);
mysqli_query($dbc,$query) or die(mysqli_error($dbc));

if($query)
{
    echo "<script>alert('Berhasil Menambahkan!');window.location='data_pengumuman.php';</script>";
}
else
{
    echo "gagal";
}
}

?>