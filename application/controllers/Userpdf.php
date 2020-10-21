<?php
Class Userpdf extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    public function index(){
        setlocale (LC_TIME, 'IND');
        $date = strftime( "%B %Y", time());
        $pdf = new FPDF("P","cm","A4");

        
$pdf->SetMargins(3,1,3);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->Image('assets/dist/img/undipp.png',0.8,0.7,2.3,2.5);
$pdf->SetFont('Times','B',13);
$pdf->MultiCell(18,0.5,'  UPT Pusat Komputer Universitas Diponegoro',0,'C');  
$pdf->SetFont('Times','',11);
$pdf->MultiCell(18,0.5,'Gedung ICT Center Lt. 2 Kampus UNDIP Tembalang',0,'C');
$pdf->SetFont('Times','',11);
$pdf->MultiCell(18,0.5,'Jl. Prof. Soedarto S.H. Tembalang, Semarang 50275, Indonesia || (024) 7460041',0,'C');
$pdf->SetFont('Times','',11);
$pdf->MultiCell(18,0.5,'website : uptpuskom.undip.ac.id',0,'C');
$pdf->Line(0,3.6,28.5,3.6);  
$pdf->SetLineWidth(0.1);      
$pdf->Line(0,3.7,28.5,3.7);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Times','',11);
$pdf->Cell(2,0.7,"No",0,0,'L');
$pdf->Cell(5,0.7,":",0,0,'L');
$pdf->Cell(7.5,0.7,"Semarang,    ".strftime( "%B %Y", time()),0,0,'R');
$pdf->ln(0.5);
$pdf->Cell(2,0.7,"Lamp.",0,0,'L');
$pdf->Cell(5,0.7,":   1 (satu) berkas",0,0,'L');
$pdf->ln(0.5);
$pdf->Cell(2,0.7,"Perihal",0,0,'L');
$pdf->Cell(5,0.7,":",0,0,'L');
$pdf->ln(0);
$pdf->SetFont('Times','BI',11);
$pdf->Cell(2,0.7,":",0,0,'L');
$pdf->Cell(0,0.7,"    Permohonan Pengadaan Perangkat",0,0,'L');
$pdf->SetFont('Times','',11);
// $pdf->Cell(19.5,0.7,"SMK Muhammadiyah Batang",0,10,'C');
$pdf->ln(0.5);
$pdf->SetFont('Times','',11);
$pdf->Cell(9.6,0.7,"",0,0,'L');
$pdf->Cell(0,0.7,"Kepada Yth :",0,0,'L');
$pdf->ln(0.5);
$pdf->Cell(9.6,0.7,"",0,0,'L');
$pdf->Cell(0,0.7,"Kepala Unit Layanan Pengadaan",0,0,'L');
$pdf->ln(0.5);
$pdf->Cell(9.6,0.7,"",0,0,'L');
$pdf->Cell(0,0.7,"Universitas Diponegoro",0,0,'L');
$pdf->ln(0.5);
$pdf->Cell(9.6,0.7,"",0,0,'L');
$pdf->Cell(0,0.7,"di -",0,0,'L');
$pdf->ln(0.5);
$pdf->Cell(10.6,0.7,"",0,0,'L');
$pdf->Cell(0,0.7,"Semarang",0,0,'L');
$pdf->ln(1.5);
$pdf->MultiCell(0,0.7,'      Sehubungan dengan telah berakhirnya masa hidup perangkat-perangkat yang terdapat pada Data Center, maka dengan ini kami mohon kiranya untuk dapat dilaksanakan proses Pengadaan Perangkat dengan rincian sebagai berikut:',0,'J');
$pdf->SetFont('Times','B',10);/* 
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d F Y"),0,0,'C'); */
$pdf->ln();
$pdf->SetFont('Times','B',9);
$pdf->Cell(1, 0.8, 'No.', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Id Request', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(2.5, 0.8, 'Jenis', 1, 0, 'C');
$pdf->Cell(2.5,0.8, 'Merk', 1, 0, 'C');/* 
$pdf->Cell(2.3,0.8, 'Persetujuan', 1, 0, 'C'); */

$pdf->SetFont('Times','',8);


 $query =  $this->db->select('request.*');

		//join
		
        $query=$this->db->get_where('request', array('validasi' => 'yes'))->result();

        $i=1; foreach ($query as $row){
              $pdf->ln();
 // $data_matriks = $this->db->get('data_matriks')->result();
 //        foreach ($data_matriks as $row){
    $pdf->Cell(1,0.8,$i++,1,0, 'C');
    $pdf->Cell(2,0.8,$row->id_request,1,0, 'C');   
    $pdf->Cell(7,0.8,$row->nama_barang,1,0, 'C');
    $pdf->Cell(2.5,0.8,$row->jenis_barang,1,0, 'C');
    $pdf->Cell(2.5,0.8,$row->merk_barang,1,0, 'C');/* 
    $pdf->Cell(2.3,0.8,$row->validasi,1,0, 'C'); */
}
$pdf->ln(1.5);
$pdf->SetFont('Times','',11);
$pdf->MultiCell(0,0.7,'      Demikian agar menjadi perhatian, kemudian atas kerjasamanya kami ucapkan terima kasih.',0,'J');

$pdf->ln(1);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Times','',11);
$pdf->Cell(30,0.7,"Mengetahui",0,0,'C');
$pdf->ln(2.5);
$pdf->Cell(30,0.7,"Pimpinan",0,0,'C');
$pdf->Output();

}}