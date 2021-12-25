<?php
include '../koneksi.php';

$query=("UPDATE table_pengumuman SET   
status='$_POST[status]'   
WHERE id_pengumuman='$_POST[id_pengumuman]'");
$update = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

// var_dump($_POST['No_Pendaftaran']);
if($update)
    {
         echo "<script>alert('Berhasil Update!');window.location='data_pengumuman.php';</script>";
    }
else
    {
       
    }
?>