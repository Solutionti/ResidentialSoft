<?php 

$trasteos = $trasteo->result()[0];
$name = $trasteos->nombre ." ".$trasteos->apellido;

$pdf=new FPDF();
$pdf->addpage();

$pdf->Image('public/img/logo.png' , 10 ,10, 30 , 28,'PNG');
$pdf->SetFont('Arial','',10);
$pdf->Ln(30);
$pdf->Cell(30,5,'AUTORIZACION DE TRASTEO No '.$ultimo.'');

$pdf->Ln(10);
$pdf->Cell(5,5,'Yo '.$name.'  identificado(a) con la C.C. '.$trasteos->documento.' propietario(a) Propietario', '', 0,'L', false );	
$pdf->Ln();
$pdf->Cell(180,5,'del apto '.$trasteos->apartamento.' bloque '.$trasteos->bloque.', Conjunto residencial altagracia comunico a la administracion que nos ');	
$pdf->Ln();
$pdf->Cell(180,5,'trasladamos a nuestra vivienda la fecha '.$fecha.', Teniendo en cuenta la orientacion');
$pdf->Ln();
$pdf->Cell(180,5,'que por seguridad de todos se permiten los trasteos hasta las seis (6) de la tarde de lunes a domingo.');
$pdf->Ln();
$pdf->Cell(180,5,'Acato las directrices de la administracion en cuanto que el vehiculo no debe ingresar al Conjunto Residencial');
$pdf->Ln();
$pdf->Cell(180,5,'ya que por el peso podria afectar la construccion de los parqueaderos y zonas comunes.');
$pdf->Ln(15);
$pdf->Cell(60,5,'PROPIETARIO');
$pdf->Cell(60,5,'ARRENDATARIO');
$pdf->Cell(60,5,'ADMINISTRACION');
$pdf->Ln(10);
$pdf->Cell(60,5,'__________________________');
$pdf->Cell(60,5,'__________________________');
$pdf->Cell(60,5,'__________________________');
$pdf->Ln(10);
$pdf->Cell(60,5);
$pdf->Cell(60,5);
$pdf->Cell(60,5,'Firma y Sello');

$pdf->Ln(15);
$pdf->Cell(60,5,'_______________________________________________________________________________________________    ');
$pdf->Image('public/img/logo.png' , 10 ,140, 30 , 28,'PNG');
$pdf->SetFont('Arial','',10);
$pdf->Ln(47);
$pdf->Cell(30,5,'AUTORIZACION DE TRASTEO No '.$ultimo.'');

$pdf->Ln(10);
$pdf->Cell(5,5,'Yo '.$name.'  identificado(a) con la C.C. '.$trasteos->documento.' propietario(a) Propietario', '', 0,'L', false );	
$pdf->Ln();
$pdf->Cell(180,5,'del apto 201 bloque 2, Conjunto residencial altagracia comunico a la administracion que nos ');	
$pdf->Ln();
$pdf->Cell(180,5,'trasladamos a nuestra vivienda la fecha '.$fecha.', Teniendo en cuenta la orientacion');
$pdf->Ln();
$pdf->Cell(180,5,'que por seguridad de todos se permiten los trasteos hasta las seis (6) de la tarde de lunes a domingo.');
$pdf->Ln();
$pdf->Cell(180,5,'Acato las directrices de la administracion en cuanto que el vehiculo no debe ingresar al Conjunto Residencial');
$pdf->Ln();
$pdf->Cell(180,5,'ya que por el peso podria afectar la construccion de los parqueaderos y zonas comunes.');
$pdf->Ln(15);
$pdf->Cell(60,5,'PROPIETARIO');
$pdf->Cell(60,5,'ARRENDATARIO');
$pdf->Cell(60,5,'ADMINISTRACION');
$pdf->Ln(10);
$pdf->Cell(60,5,'__________________________');
$pdf->Cell(60,5,'__________________________');
$pdf->Cell(60,5,'__________________________');
$pdf->Ln();
$pdf->Cell(60,5);
$pdf->Cell(60,5);
$pdf->Cell(60,5,'Firma y Sello');
$pdf->Ln(15);
$pdf->Cell(60,5,'Calle 90 # 11 A 27');
$pdf->Ln();
$pdf->Cell(60,5,'Tel. 5803300');
$pdf->Ln();
$pdf->Cell(60,5,'Propiedadhorizontal.com.co');
$pdf->Ln();
$pdf->Cell(60,5,'Ibague - Tolima');

$pdf->Output();


?>
