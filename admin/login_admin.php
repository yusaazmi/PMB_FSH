<?php
session_start();
include '../koneksi.php';
if (isset($_POST['Username']) AND isset($_POST['Password']))
{
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);   
    $login = mysqli_query($dbc, "SELECT * FROM table_admin WHERE Username='$Username' AND Password='$Password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0)
    {
        $data = mysqli_fetch_array($login);
        $_SESSION['Username'] = $data['Username'];
        $_SESSION['Nama'] = $data['Nama'];
        // var_dump($data);
            echo "<script>alert('berhasil login');window.location='dashboard.php'</script>";
    }
    else
    {
        echo "<script>alert('login gagal');window.location='index.php'</script>";
    }
}
?>