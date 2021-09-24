<?php
include '../koneksi.php';

$No_Pendaftaran = $_POST['No_Pendaftaran'];

// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
$pdf->SetMargins(20,15,25);
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(170,7,'BIODATA CALON MAHASISWA FAKULTAS HUKUM DAN SYARIAH',0,1,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
// $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
// $pdf->Cell(30,6,'No Pendaftaran',1,0);
// $pdf->Cell(50,6,'Nama Lengkap',1,0);
// $pdf->Cell(50,6,'Email',1,0);
// $pdf->Cell(30,6,'Prodi_pilihan',1,0);
// $pdf->Cell(25,6,'Jenis Kelamin',1,1);

$pdf->SetFont('Arial','',11);

$sql = mysqli_query($dbc, "select * from table_pendaftaran WHERE No_Pendaftaran = '$No_Pendaftaran'");
// var_dump($sql);
while ($data = mysqli_fetch_array($sql)){
    // $pdf->Cell(6,0.5,'Nama Lengkap                : '.ucfirst($data['Nama_lengkap']),0,1, 'L');
    $date = date_create($data['Tanggal_lahir']);
    $pdf->Cell(40,0.5,'Nama Lengkap');
    $pdf->Cell(30,0.5,': '.ucfirst($data['Nama_lengkap']));
    $pdf->Image('../assets/foto_mahasiswa/'.$data['Foto'],150,30,40,50,'JPG');
    $pdf->Ln();
    $pdf->Cell(40,10,'Tempat, Tanggal Lahir');
    $pdf->Cell(30,10,': '.ucfirst($data['Tempat_lahir']).','.date_format($date,"d M Y"));
    $pdf->Ln();
    $pdf->Cell(40,2,'Jenis Kelamin');
    $pdf->Cell(40,2,': '.ucfirst($data['Jenis_kelamin']));
    $pdf->Ln();
    $pdf->Cell(40,10,'Alamat');
    $pdf->Cell(30,10,': '.ucfirst($data['Alamat']));
    $pdf->Ln();
    $pdf->Cell(40,2,'Provinsi');
    $pdf->Cell(30,2,': '.ucfirst($data['Provinsi']));
    $pdf->Ln();
    $pdf->Cell(40,10,'Kode Pos');
    $pdf->Cell(30,10,': '.ucfirst($data['Kode_pos']));
    $pdf->Ln();
    $pdf->Cell(40,2,'Asal Sekolah');
    $pdf->Cell(30,2,': '.ucfirst($data['Asal_sekolah']));
    $pdf->Ln();
    $pdf->Cell(40,10,'Email');
    $pdf->Cell(30,10,': '.ucfirst($data['Email']));
    $pdf->Ln();
    $pdf->Cell(40,2,'Nama_bapak');
    $pdf->Cell(30,2,': '.ucfirst($data['Nama_bapak']));
    $pdf->Ln();
    $pdf->Cell(40,10,'Nama_ibu');
    $pdf->Cell(30,10,': '.ucfirst($data['Nama_ibu']));
    $pdf->Ln();
    $pdf->Cell(40,2,'Pekerjaan');
    $pdf->Cell(30,2,': '.ucfirst($data['Pekerjaan']));
    $pdf->Ln();
    $pdf->Cell(40,10,'Status_perkawinan');
    $pdf->Cell(30,10,': '.ucfirst($data['Status_perkawinan']));

    // $pdf->Ln();
    // $pdf->Cell(6,10,'Tempat, Tanggal Lahir');
    // $pdf->Ln(10);
    // $pdf->Cell(6,10,':'.ucfirst($data['Tempat_lahir']),0,1, 'L');
    // $pdf->Ln();
    // $pdf->Cell(6,2,'Jenis Kelamin                  : '.ucfirst($data['Jenis_kelamin']),0,1, 'L');
    // $pdf->Cell(6,10,'Alamat                             : '.ucfirst($data['Alamat']),0,1, 'L');
    // $pdf->Cell(6,2,'Provinsi                           : '.ucfirst($data['Provinsi']),0,1, 'L');
    // $pdf->Cell(6,10,'Asal Sekolah                    : '.ucfirst($data['Asal_sekolah']),0,1, 'L');
    // $pdf->Cell(30,6,$data['No_Pendaftaran']);
    // $pdf->Cell(50,6,$data['Nama_lengkap']);
    // $pdf->Cell(50,6,$data['Email'],1,0);
    // $pdf->Cell(30,6,$data['Prodi_pilihan'],1,0); 
    // $pdf->Cell(25,6,$data['Jenis_kelamin'],1,1); 
}

$pdf->Output();
?>