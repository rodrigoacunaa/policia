<?php
require('../fpdf/fpdf.php');
require('../db.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('img/polit.jpg',8,3,35);
$this->Image('img/polit.jpg',168,3,35);
$this->SetXY(0,15);
$this->SetFont('Times','B',11);
$this->Cell(0,10,utf8_decode('Provincia de buenos aires'),0,1,'C');
$this->SetXY(0,20);
$this->Cell(0,10,utf8_decode('Escuela de Policia "Juan Vucetich"'),0,1,'C');
$this->SetXY(0,25);
$this->Cell(0,10,utf8_decode('Sede la Costa'),0,1,'C');
$this->SetXY(25,60);
    // // Logo
    // $this->Image('logo.png',10,8,33);
    // // Arial bold 15
    // $this->SetFont('Arial','B',15);
    // // Movernos a la derecha
    // $this->Cell(80);
    // // Título
    // $this->Cell(30,10,'Title',1,0,'C');
    // // Salto de línea
    // $this->Ln(20);
}

// Pie de página
function Footer()
{
    // // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // // Arial italic 8
    $this->SetFont('Arial','I',8);
    // // Número de página
    $this->Cell(0,10,'pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,15);
$pdf->SetXY(78.5,50);
$pdf->Cell(45,8,utf8_decode('Listado por Cursos #'),1,1,'C');

$pdf->SetXY(25,60);
$pdf->Cell(8,5,utf8_decode('N°'),1,0,'C',0);
$pdf->Cell(20,5,utf8_decode('D.N.I.'),1,0,'C',0);
$pdf->Cell(80,5,utf8_decode('Apellido y Nombre'),1,0,'C',0);
$pdf->Cell(15,5,utf8_decode('Aula'),1,0,'C',0);
$pdf->Cell(40,5,utf8_decode('Observaciones'),1,1,'C',0);

$pdf->SetFillColor(233, 229, 235);



$pdf->SetFont('Arial','',11);
for($i=1;$i<=80;$i++){
    $pdf->SetX(25);
    $pdf->Cell(8,5,$i,'B',0,'C',1);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(20,5,utf8_decode('45.422.796'),'B',0,'C',1);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(80,5,utf8_decode('Apellido y Nombre'),'B',0,'C',1);
    $pdf->Cell(15,5,utf8_decode('7'),'B',0,'C',1);
    $pdf->Cell(40,5,utf8_decode('Lorem Ipsum'),'B',1,'C',1);
    $pdf->Ln(0.2);
}
$pdf->Output();
?>