<?php
include 'koneksi.php';
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Daftar Calon Mahasiswa Baru FSH',0,1,'C');
$pdf->SetFont('Arial','B',12);
// $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'No Pendaftaran',1,0);
$pdf->Cell(50,6,'Nama Lengkap',1,0);
$pdf->Cell(50,6,'Email',1,0);
$pdf->Cell(30,6,'Prodi_pilihan',1,0);
$pdf->Cell(25,6,'Jenis Kelamin',1,1);

$pdf->SetFont('Arial','',10);

$sql = mysqli_query($dbc, "select * from table_pendaftaran");
while ($data = mysqli_fetch_array($sql)){
    $pdf->Cell(30,6,$data['No_Pendaftaran'],1,0);
    $pdf->Cell(50,6,$data['Nama_lengkap'],1,0);
    $pdf->Cell(50,6,$data['Email'],1,0);
    $pdf->Cell(30,6,$data['Prodi_pilihan'],1,0); 
    $pdf->Cell(25,6,$data['Jenis_kelamin'],1,1); 
}

$pdf->Output();
?>