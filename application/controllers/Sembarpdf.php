<?php
Class Sembarpdf extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    public function index(){
        setlocale (LC_TIME, 'IND');
        $date = strftime( "%B %Y", time());
        $pdf = new FPDF("P","cm","A4");

$pdf->SetMargins(1.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->Image('assets/dist/img/undipp.png',0.8,0.7,2.3,2.5);
$pdf->SetFont('Times','B',13);
$pdf->MultiCell(19.5,0.5,'  UPT Pusat Komputer Universitas Diponegoro',0,'C');  
$pdf->SetFont('Times','',11);
$pdf->MultiCell(19.5,0.5,'Gedung ICT Center Lt. 2 Kampus UNDIP Tembalang',0,'C');
$pdf->SetFont('Times','',11);
$pdf->MultiCell(19.5,0.5,'Jl. Prof. Soedarto S.H. Tembalang, Semarang 50275, Indonesia || (024) 7460041',0,'C');
$pdf->SetFont('Times','',11);
$pdf->MultiCell(19.5,0.5,'website : uptpuskom.undip.ac.id',0,'C');
$pdf->Line(0,3.6,28.5,3.6);  
$pdf->SetLineWidth(0.1);      
$pdf->Line(0,3.7,28.5,3.7);   
$pdf->SetLineWidth(0);
$pdf->ln(2);
$pdf->SetFont('Times','B',13);
$pdf->Cell(18.5,0.7,"Laporan Data Semua Barang",0,10,'C');
// $pdf->Cell(19.5,0.7,"SMK Muhammadiyah Batang",0,10,'C');
$pdf->ln(0);
$pdf->SetFont('Times','B',10);/* 
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d F Y"),0,0,'C'); */
$pdf->ln();
$pdf->SetFont('Times','B',9);
$pdf->Cell(0.8, 0.8, 'No.', 1, 0, 'C');
$pdf->Cell(1.8, 0.8, 'Id Barang', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(2.6, 0.8, 'Jenis', 1, 0, 'C');
$pdf->Cell(1.9, 0.8, 'Merk', 1, 0, 'C');
$pdf->Cell(2.3,0.8, 'Tanggal Pasang', 1, 0, 'C');
$pdf->Cell(2.2,0.8, 'Tanggal Habis', 1, 0, 'C');
$pdf->Cell(1.9,0.8, 'Sisa Usia', 1, 0, 'C');

$pdf->SetFont('Times','',8);


 $query =  $this->db->select('sembar_fix.*');

		//join
		
        $query=$this->db->get('sembar_fix')->result();

        $i=1; foreach ($query as $row){
              $pdf->ln();
 // $data_matriks = $this->db->get('data_matriks')->result();
 //        foreach ($data_matriks as $row){
    $pdf->Cell(0.8,0.8,$i++,1,0, 'C');
    $pdf->Cell(1.8,0.8,$row->id_barang,1,0, 'C');   
    $pdf->Cell(4.5,0.8,substr($row->nama_barang,0,27),1,0, 'C');
    $pdf->Cell(2.6,0.8,substr($row->jenis_barang,0,17),1,0, 'C');
    $pdf->Cell(1.9,0.8,$row->merk_barang,1,0, 'C');
    $pdf->Cell(2.3,0.8,$row->tanggal_pasang,1,0, 'C');
    $pdf->Cell(2.2,0.8,$row->tanggal_habis,1,0, 'C');
    $pdf->Cell(1.9,0.8,$row->sisa_usia_bulan,1,0, 'C');
}

$pdf->ln(1);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Times','',12);
$pdf->Cell(30,0.7,"Semarang,     ".strftime( "%B %Y", time()),0,0,'C');
$pdf->ln(0.8);
$pdf->Cell(30,0.7,"Mengetahui",0,0,'C');
$pdf->ln(2.5);
$pdf->Cell(30,0.7,"Pimpinan",0,0,'C');
$pdf->Output();

}}