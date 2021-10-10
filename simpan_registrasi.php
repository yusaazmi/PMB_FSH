<?php
include 'koneksi.php';

$Email = $_POST['Email'];
$Password = md5($_POST['Password']);
$Nama_lengkap = $_POST['Nama_lengkap'];
$Prodi_pilihan = $_POST['Prodi_pilihan'];
$Tempat_lahir = $_POST['Tempat_lahir'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$Jenis_kelamin = $_POST['Jenis_kelamin'];
$Alamat = $_POST['Alamat'];
$Provinsi = $_POST['Provinsi'];
$Kode_pos = $_POST['Kode_pos'];
$Asal_sekolah = $_POST['Asal_sekolah'];
$Nama_bapak = $_POST['Nama_bapak'];
$Nama_ibu = $_POST['Nama_ibu'];
$Pekerjaan = $_POST['Pekerjaan'];
$Status_perkawinan = $_POST['Status_perkawinan'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$gambar = date('dmYHis').$foto;

$path = 'assets/foto_mahasiswa/'.$gambar;
if(move_uploaded_file($tmp , $path)){

    $query = "INSERT INTO table_pendaftaran (Email,Password,Nama_lengkap,Prodi_pilihan,Tempat_lahir,Tanggal_lahir,Jenis_kelamin,Alamat,Provinsi,Kode_pos,Asal_sekolah,Nama_bapak,Nama_ibu,Pekerjaan,Status_perkawinan,foto) values ('$Email','$Password','$Nama_lengkap','$Prodi_pilihan','$Tempat_lahir','$Tanggal_lahir','$Jenis_kelamin','$Alamat','$Provinsi','$Kode_pos','$Asal_sekolah','$Nama_bapak','$Nama_ibu','$Pekerjaan','$Status_perkawinan','$gambar')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));

    $select = "SELECT * FROM table_pendaftaran where Email = '$Email'";
    $data = mysqli_query($dbc,$select);
    $data1 = mysqli_fetch_array($data);
    // var_dump($data1);
    $query2 = "INSERT INTO table_hasil_test(No_Pendaftaran,Nilai_test1,Nilai_test2,Nilai_test3,Status) values ('','$data1[No_Pendaftaran]','','','','Belum Diterima')";
    $hasil = mysqli_query($dbc,$query2);
    if($query2)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='index.php';</script>";
    }
    else
    {
        echo "gagal";
    }
}
?>