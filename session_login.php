<?php
session_start();
include 'koneksi.php';
if (isset($_POST['Email']) AND isset($_POST['Password']))
{
    $Email = $_POST['Email'];
    $Password = md5($_POST['Password']);   
    $login = mysqli_query($dbc, "SELECT * FROM table_pendaftaran WHERE Email='$Email' AND Password='$Password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0)
    {
        $data = mysqli_fetch_array($login);
        $_SESSION['Email'] = $data['Email'];
        // var_dump($data);
            echo "<script>alert('berhasil login');window.location='index.php'</script>";
    }
    else
    {
        echo "<script>alert('login gagal');window.location='index.php'</script>";
    }
}
?>