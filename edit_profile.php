<?php
include 'koneksi.php';


if($_FILES['Foto'] != null)
{
    
    $foto = $_FILES['Foto']['name'];
    $tmp = $_FILES['Foto']['tmp_name'];
    $gambar = date('dmYHis').$foto;
    $path = 'assets/foto_mahasiswa/'.$gambar;
    $password = md5($_POST['Password']);
    
    move_uploaded_file($tmp,$path);
    
    $query=("UPDATE table_pendaftaran SET 
    Nama_lengkap='$_POST[Nama_lengkap]',
    Password='$password',
    Tempat_lahir='$_POST[Tempat_lahir]',
    Tanggal_lahir='$_POST[Tanggal_lahir]',
    Jenis_kelamin='$_POST[Jenis_kelamin]',
    Alamat='$_POST[Alamat]',
    Provinsi='$_POST[Provinsi]',
    Kode_pos='$_POST[Kode_pos]',
    Asal_sekolah='$_POST[Asal_sekolah]',
    Nama_bapak='$_POST[Nama_bapak]',
    Nama_ibu='$_POST[Nama_ibu]',
    Pekerjaan='$_POST[Pekerjaan]',
    Foto='$gambar',
    Status_perkawinan='$_POST[Status_perkawinan]'
    WHERE No_Pendaftaran='$_POST[No_Pendaftaran]'");
    $update = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    // var_dump($update);
    
    if($update)
    {
        echo "<script>alert('Berhasil Update!');window.location='profile.php';</script>";
    }
    else
    {
        
    }
}
    ?>