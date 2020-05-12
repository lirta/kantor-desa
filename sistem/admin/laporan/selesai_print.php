<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
  // Page header
  function Header()
  {
    // Logo
    // Arial bold 15
    $this->SetFont('Arial', 'B', 18);
    // Move to the right
    $this->Cell(100);
    // Title
    $this->Cell(100, 10, 'LAPORAN PENGURUSAN SURAT SURAT', 0, 0, 'C');
    // Line break
    $this->Ln(10);
    $this->Cell(80);


    $this->SetFont('Arial', 'B', 15);
    $this->Cell(100, 10, 'DI KANTOR DESA KARYA INDAH DATA YANG TELAH SELESAI PENGURUSAN', 0, 0, 'C');
    $this->Cell(100, 10, '', 0, 0, 'C');
    $this->Ln(10);
    $this->Cell(80);

    //$this->Cell(110,10,'Laporan Data Pendidikan',0,0,'C');


    $this->Ln(25);
  }

  // Page footer
  function Footer()
  {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial', 'I', 8);
    // Page number
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }
}
// Instanciation of inherited class
$pdf = new PDF('L', 'mm', 'A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 8);

$pdf->Cell(10, 7, 'No.', 1, 0, 'C');
$pdf->Cell(40, 7, 'NIK', 1, 0, 'C');
$pdf->Cell(40, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(40, 7, 'TEMPAT/TANGGAL LAHIR', 1, 0, 'C');
$pdf->Cell(40, 7, 'AGAMA', 1, 0, 'C');
$pdf->Cell(40, 7, 'ALAMAT', 1, 0, 'C');
$pdf->Cell(40, 7, 'NO TELPON', 1, 0, 'C');
$pdf->Cell(40, 7, 'TANGGAL PENGAJUAN', 1, 0, 'C');
$pdf->Cell(80, 7, 'PENGURUSAN SURAT', 1, 0, 'C');

$pdf->Ln();


include "../../pages/coneksi/config.php";
$no = 1;
$queri = "SELECT * FROM pengajuan inner join jenis_surat on pengajuan.id_jenis_surat=jenis_surat.id_jenis_surat ";
$kolom = mysqli_query($koneksi, $queri);
while ($hasil = mysqli_fetch_assoc($kolom)) {
  if ($hasil['status'] == "SELESAI") {
    $pdf->SetFont('Times', 'B', 8);
    $pdf->Cell(10, 7, $no++, 1, 0, 'l');
    $pdf->Cell(40, 7, $hasil['nik_pengajuan'], 1, 0, 'L');
    $pdf->Cell(40, 7, $hasil['nama_pengajuan'], 1, 0, 'L');
    $pdf->Cell(40, 7, $hasil['tempat_lahir_pengajuan'], 1, 0, 'L');
    $pdf->Cell(40, 7, $hasil['agama_pengajuan'], 1, 0, 'L');
    $pdf->Cell(40, 7, $hasil['alamat_pengajuan'], 1, 0, 'L');
    $pdf->Cell(40, 7, $hasil['hp_pengajuan'], 1, 0, 'L');
    $pdf->Cell(40, 7, $hasil['tgl_pengajuan'], 1, 0, 'L');
    $pdf->Cell(80, 7, $hasil['nama_surat'], 1, 0, 'L');
    $pdf->Ln();
  }
}

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Times', '', 11);


$pdf->Output();
