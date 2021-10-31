<?php
include '../koneksi.php';
require('../fpdf/fpdf.php');

$query = "SELECT * FROM table_pendaftaran,table_hasil_test WHERE table_hasil_test.No_Pendaftaran = table_pendaftaran.No_Pendaftaran";
$sql = mysqli_query($dbc,$query);
class pdf extends FPDF
{
    function letak($gambar)
    {
    //memasukkan gambar untuk header
    $this->Image($gambar,8,5,25,25);
    //menggeser posisi sekarang
    }
    function judul($teks1, $teks2, $teks3, $teks4, $teks5)
    {
        $this->Cell(15);
        $this->SetFont('Times','B','12');
        $this->Cell(0,5,$teks1,0,1,'C');
        $this->Cell(15);
        $this->Cell(0,5,$teks2,0,1,'C');
        $this->Cell(15);
        $this->SetFont('Times','B','15');
        $this->Cell(0,5,$teks3,0,1,'C');
        $this->Cell(15);
        $this->SetFont('Times','','8');
        $this->Cell(0,15,$teks4,0,1,'C');
        $this->Cell(15);
        $this->Cell(0,-7,$teks5,0,1,'C');
    }
    function garis()
    {
        $this->SetLineWidth(1);
        $this->Line(0,30,300,30);
        $this->SetLineWidth(1);
        $this->Line(0,39,250,39);
        $this->Ln(10);
    }
    function ImprovedTable($sql)
{
    // Column widths
    $this->Cell(15);
    $this->Cell(0,10,'Laporan Pendaftaran Calon Mahasiswa FSH',0,1,'C');
    $this->Cell(10);
    $this->SetLineWidth(0.4);
    $w = array(35, 33, 30, 35,35);
    // Header
    $this->SetFont('Arial','',10);
    
    $header = array('No. Pendaftaran', 'Nama Lengkap', 'Jenis Kelamin', 'Prodi Pilihan','Status');
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    while($data = mysqli_fetch_array($sql))
    {
        $this->Cell(10);
        $this->Cell($w[0],6,$data['No_Pendaftaran'],'LR');
        $this->Cell($w[1],6,$data['Nama_lengkap'],'LR');
        $this->Cell($w[2],6,$data['Jenis_kelamin'],'LR',0,'R');
        $this->Cell($w[3],6,$data['Prodi_pilihan'],'LR',0,'R');
        $this->Cell($w[4],6,$data['Status'],'LR',0,'C');
        $this->Ln();
    }
    // Closing line
    $this->Cell(10);
    $this->Cell(array_sum($w),0,'','T');
}
}
$pdf = new PDF();
$pdf->AddPage('P', 'A4');
$pdf->letak('../assets/assetss/unsiq.png');
$pdf->judul('FAKULTAS SYARIAH DAN HUKUM', 'UNIVERSITAS SAINS AL-QUR\'AN','JAWA TENGAH DI WONOSOBO','Fakultas Syariah dan Hukum (FSH) Jl. KH. Hasyim Asy\'ari KM.03, Kalibeber, Mojotengah, Wonosobo 56351', 'Kontak : 0813-2424-7010 | Website: http://pmb.unsiq.ac.id Dan http://unsiq.ac.id');
$pdf->garis();


$pdf->SetFont('Arial','',12);
$pdf->ImprovedTable($sql);
$pdf->Output();

?>