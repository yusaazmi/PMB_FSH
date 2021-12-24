<?php
include 'koneksi.php';


if($_FILES['Foto'] != null && $_FILES['surat_keterangan'] != null)
{
    $file_allowed = array('jpg','png');
    $allowed = array('pdf');

    $foto = $_FILES['Foto']['name'];
    $surat_keterangan = $_FILES['surat_keterangan']['name'];
    // var_dump($surat_keterangan);
    $ext = pathinfo($foto, PATHINFO_EXTENSION);
    $ext2 = pathinfo($surat_keterangan, PATHINFO_EXTENSION);
    if(!in_array($ext,$file_allowed) && filesize($foto) > 10000000 && $_FILES['surat_keterangan']['content-type'] == 'application/pdf' && filesize($surat_keterangan) > 5000000)
    {
        echo "<script>alert('Update Gagal!');window.location='profile.php';</script>";
    }
    else{
        $tmp = $_FILES['Foto']['tmp_name'];
        $gambar = date('dmYHis').$foto;
        $path = 'assets/foto_mahasiswa/'.$gambar;

        $tmp2 = $_FILES['surat_keterangan']['tmp_name'];
        $surat = date('dmYHis').$surat_keterangan;
        $path2 = 'assets/surat_keterangan/'.$surat;
        $password = md5($_POST['Password']);
        
        move_uploaded_file($tmp,$path);
        move_uploaded_file($tmp2,$path);
        
        $query=("UPDATE table_pendaftaran SET 
        Nama_lengkap='$_POST[Nama_lengkap]',
        Password='$password',
        Prodi_pilihan = '$_POST[Prodi_pilihan]',
        Tempat_lahir='$_POST[Tempat_lahir]',
        Tanggal_lahir='$_POST[Tanggal_lahir]',
        Jenis_kelamin='$_POST[Jenis_kelamin]',
        Alamat='$_POST[Alamat]',
        No_telephone='$_POST[No_telephone]',
        Provinsi='$_POST[Provinsi]',
        Kode_pos='$_POST[Kode_pos]',
        Asal_sekolah='$_POST[Asal_sekolah]',
        Nama_bapak='$_POST[Nama_bapak]',
        Nama_ibu='$_POST[Nama_ibu]',
        Pekerjaan='$_POST[Pekerjaan]',
        Foto='$gambar',
        surat_keterangan = '$surat',
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
}
    ?>