<?php
include 'koneksi.php';
require('fpdf/fpdf.php');

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
    }
    function nomor($text6,$text7,$text8)
    {
        $this->Cell(8);
        $this->SetFont('Times','','10');
        $this->Cell(80,23,$text6,0,1,'L');
        $this->Cell(8);
        $this->SetFont('Times','','10');
        $this->Cell(17,-13,$text7,0,1,'L');
        $this->Cell(8);
        $this->SetFont('Times','','10');
        $this->Cell(21,22,$text8,0,1,'L');
    }
    function salam($text9)
    {
        $this->Cell(8);
        $this->SetFont('Times','BI','12');
        $this->Cell(80,4,$text9,0,1,'L');
    }
    function salam1($text9)
    {
        $this->Cell(8);
        $this->SetFont('Times','BI','12');
        $this->Cell(80,10,$text9,0,1,'L');
    }
    function tanggal($text)
    {
        $this->Cell(10);
        $this->SetFont('Times','','12');
        $this->Cell(0,10,$text,0,1,'R');
        $this->Cell(15);
        $this->Cell(0,3,'Mengetahui,',0,1,'R');
        $this->Cell(15);
        $this->Cell(0,6,'Ketua Panitia Penerimaan Mahasiswa Baru',0,1,'R');
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Cell(15);
        $this->SetFont('Times','BU','12');
        $this->Cell(15);
        $this->Cell(0,10,'Herman Sujarwo, S.H.,M.H',0,10,'R');
        $this->Cell(0,3,'NPU : 1910910111',0,10,'R');
    }
    function nama($text10)
    {
        $this->Cell(20);
        $this->SetFont('Times','','12');
        $this->Cell(80,10,$text10,0,1,'L');
    }
    function nim($text10)
    {
        $this->Cell(20);
        $this->SetFont('Times','','12');
        $this->Cell(80,10,$text10,0,1,'L');
    }
    function prodi($text10)
    {
        $this->Cell(20);
        $this->SetFont('Times','','12');
        $this->Cell(80,10,$text10,0,1,'L');
    }
    function keterangan($text11)
    {
        $this->Cell(1);
        $this->SetFont('Times','B','12');
        $this->Cell(80,10,$text11,0,1,'L');
    }
    function hasil($text)
    {
        $this->Cell(20);
        $this->SetFont('Times','B','12');
        $this->Cell(0,10,$text,0,1,'C');
    }
    function FancyTable($no,$materi,$nilai, $data1,$data2,$data3)
    {
    // Colors, line width and bold font
    $header = array($no,$materi,$nilai);
    $this->Cell(55);
    $this->SetFillColor(14,206,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(20, 50, 35);
    for($i=0;$i<3;$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    $test = ['Baca Tulis Al-Qur\'an','Bahasa Inggris','Komputer'];
    $nomr = 1;
    $nilai = [$data1,$data2,$data3];
    for($a=0;$a<=2;$a++)
    {
        $this->Cell(55);
        $this->Cell($w[0],6,$nomr,'LR',0,'C',$fill);
        $this->Cell($w[1],6,$test[$a],'LR',0,'C',$fill);
        $this->Cell($w[2],6,$nilai[$a],'LR',0,'C',$fill);
        $this->Ln();
        $nomr++;
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(55);
    $this->Cell(array_sum($w),0,'','T');
    }
}
$query = "SELECT * from table_pendaftaran WHERE No_Pendaftaran = '$_GET[id]'";
$query2 = "SELECT * from table_hasil_test WHERE No_Pendaftaran = '$_GET[id]'";
$sql = mysqli_query($dbc,$query);
$sql2 = mysqli_query($dbc,$query2);
$data = mysqli_fetch_array($sql);
$data2 = mysqli_fetch_array($sql2);
    $pdf=new pdf();

    //Mulai dokumen
    $pdf->AddPage('P', 'A4');
    //meletakkan gambar
    $pdf->letak('assets/assetss/unsiq.png');
    //meletakkan judul disamping logo diatas
    $pdf->judul('FAKULTAS SYARIAH DAN HUKUM', 'UNIVERSITAS SAINS AL-QUR\'AN','JAWA TENGAH DI WONOSOBO','Fakultas Syariah dan Hukum (FSH) Jl. KH. Hasyim Asy\'ari KM.03, Kalibeber, Mojotengah, Wonosobo 56351', 'Kontak : 0813-2424-7010 | Website: http://pmb.unsiq.ac.id Dan http://unsiq.ac.id');
    //membuat garis ganda tebal dan tipis
    $pdf->garis();
    $pdf->nomor('No Surat Keterangan : 001/PMB-FSH/UNSIQ/Bulan Romawi/2021','No Pendaftaran          : Nomor Pendaftaran','Hal                             : Surat Keterangan');
    $pdf->salam('Assalamual\'aikum, Wr.Wb.');
    $pdf->SetFont('Times','',12);
    $pdf->MultiCell(0, 5, '     Yang bertanda tanda tangan di bawah ini Ketua Panitia Mahasiswa Baru Universitas Sains Al-Quraan (UNSIQ) Jawa Tengah di Wonosobo Tahun Akademik 2021. Berdasarkan dari hasil seleksi yang di lakukan calon mahasiswa baru Gelombang pada Hari, Tanggal Bulan Tahun menyatakan bahwa :');
    $pdf->nama('Nama                 : '.$data['Nama_lengkap']);
    $pdf->nim('No Pendaftaran  : '.$data['No_Pendaftaran']);
    $pdf->prodi('Prodi                  : '.$data['Prodi_pilihan']);

    $pdf->keterangan($data2['Status'].' sebagai mahasiswa Universitas Sains Al-Qur\'an di Fakultas Syariah dan Hukum Kelas B.');
    $pdf->hasil('HASIL TEST');
    $test = ['materi 1','materi 2', 'materi 3'];
    $pdf->FancyTable('No','Materi','Nilai',$data2['Nilai_test1'],$data2['Nilai_test2'],$data2['Nilai_test3']);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(20,10,'',0,1,'L');
    $pdf->MultiCell(0,5,'   Demikian permohonan ini kami sampaikan, surat keterangan yang kami buat dengan yang sebenar-benarnya dan dapat di pergunakan dengan semestinya.');
    $pdf->salam1('Wallahul Muwafiq Illa Aqwamit Thorieq');
    $pdf->salam('Wassalamu\'alaikum,Wr.Wb.');
    $pdf->tanggal('Wonosobo, '.tgl_indo(date('Y-m-d')));
    
    $pdf->Output('surat-keterangan-mahasiswa-baru.pdf','I');
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
     
    // echo tgl_indo(date('Y-m-d')); // 21 Oktober 2017
     
    // echo "<br/>";
    // echo "<br/>";
     
    // echo tgl_indo("1994-02-15"); // 15 Februari 1994
?>