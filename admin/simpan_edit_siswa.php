<?php
include '../koneksi.php';

$query=("UPDATE table_hasil_test SET 
-- No_Pendaftaran = '$_POST[No_Pendaftaran]',
Nilai_test1='$_POST[Nilai_test1]',
Nilai_test2='$_POST[Nilai_test2]',   
Nilai_test3='$_POST[Nilai_test3]'   
WHERE No_Pendaftaran='$_POST[No_Pendaftaran]'");
$update = mysqli_query($dbc,$query) or die(mysqli_error($dbc));

// var_dump($_POST['No_Pendaftaran']);
if($update)
    {
         echo "<script>alert('Berhasil Update!');window.location='data_hasil.php';</script>";
    }
else
    {
       
    }
?>