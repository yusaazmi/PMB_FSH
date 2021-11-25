<?php
include '../koneksi.php';

$query=("UPDATE table_pembayaran SET 
status_pembayaran ='$_POST[status_pembayaran]'
WHERE id_bayar='$_POST[id_bayar]'");
$update = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

// var_dump($_POST['No_Pendaftaran']);
if($update)
    {
         echo "<script>alert('Berhasil Update!');window.location='data_pembayaran.php';</script>";
    }
else
    {
       
    }
?>