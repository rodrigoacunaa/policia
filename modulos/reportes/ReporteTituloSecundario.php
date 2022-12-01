<?php
require('../fpdf/fpdf.php');
require('../db.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
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
    $this->Image('img/polit.jpg',8,3,35);
    $this->Image('img/polit.jpg',168,3,35);
    $this->SetXY(0,15);
    $this->SetFont('Times','B',11);
    $this->Cell(0,10,utf8_decode('Provincia de buenos aires'),0,1,'C');
    $this->SetXY(0,20);
    $this->Cell(0,10,utf8_decode('Escuela de Policia "Juan Vucetich"'),0,1,'C');
    $this->SetXY(0,25);
    $this->Cell(0,10,utf8_decode('Sede la Costa'),0,1,'C');
    $this->SetXY(45,50);
}

// Pie de página
function Footer()
{
    // // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // // Arial italic 8
    $this->SetFont('Arial','I',8);
    // // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,15);
$pdf->Cell(120,8,utf8_decode('Listado Control y correccion de escuela y titulo secundario - aula #'),1,1,'C');
$pdf->SetXY(31,60);

$pdf->SetFillColor(233, 229, 235);

$pdf->SetFont('Arial','',11);
for($i=1;$i<=180;$i++){
    $pdf->SetX(31);
    $pdf->Cell(150,26,'',0,0,'C',1);
    $pdf->SetX(35);
    $pdf->Cell(8,5,$i.')-',0,0,'C',0);
    $pdf->SetX(53);
    $pdf->Cell(128,5,utf8_decode('Lautaro Laraignee'),'B',1,'L',0);
    $pdf->Ln(0.2);
    $pdf->SetX(38);
    $pdf->Cell(10,5,utf8_decode('Titulo: '),0,0,'C',1);
    $pdf->SetX(53);
    $pdf->Cell(128,5,utf8_decode('Tecnico en programacion'),'B',1,'L',0);
    $pdf->Ln(0.2);
    $pdf->SetX(34);
    $pdf->Cell(20,5,utf8_decode('Escuela:'),0,0,'C',1);
    $pdf->SetX(53);
    $pdf->Cell(128,5,utf8_decode('EEST N°1'),'B',1,'L',0);
    $pdf->Ln(0.2);

    $pdf->SetX(34);
    $pdf->Cell(20,5,utf8_decode('Distrito:'),0,0,'C',0);
    $pdf->SetX(53);
    $pdf->Cell(128,5,utf8_decode('La Costa'),'B',1,'L',0);
    $pdf->SetX(34);

    $pdf->Cell(20,5,utf8_decode('Resolucion:'),0,0,'C',0);
    $pdf->Cell(20,5,utf8_decode('12/02'),0,0,'L',0);
    $pdf->SetX(100);
    $pdf->Cell(20,5,utf8_decode('Año de egreso:'),0,0,'C',0);
    $pdf->Cell(20,5,utf8_decode('12/02'),0,1,'C',0);
    $pdf->SetX(31);
    $pdf->Cell(150,0,utf8_decode(''),'B',1,'C',0);
    $pdf->Ln(0.2);
}
$pdf->Output();
?>