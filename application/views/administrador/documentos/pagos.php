<?php 

$pdf=new FPDF();
$pdf->addpage();

$pdf->Image('public/img/logo.png' , 10 ,10, 30 , 28,'PNG');
$pdf->SetFont('Arial','',10);
$pdf->Ln(30);
$pdf->Cell(30,5,'RECIBO DE PAGO No 2839483');

$pdf->Ln(10);
$pdf->Cell(20,5,'BLOQUE:', '', 0,'L', false );	
$pdf->Cell(40,5,'1', '', 0,'L', false );
$pdf->Cell(30,5,'APARTAMENTO:', '', 0,'L', false );	
$pdf->Cell(40,5,'2018', '', 0,'L', false );	
$pdf->Cell(15,5,'FECHA:', '', 0,'L', false );	
$pdf->Cell(15,5,'26/12/2021', '', 0,'L', false );

$pdf->Ln(10);
$pdf->Cell(20,5,'Recibi de :', '', 0,'L', false );	
$pdf->Cell(90,5,'Jerson Reinel Galvez Ensuncho', '', 0,'L', false );
$pdf->Cell(20,5,'Cantidad:', '', 0,'L', false );	
$pdf->Cell(20,5,'$786959', '', 0,'L', false );

$pdf->Ln(10);
$pdf->Cell(30,5,'Por Concepto de :', '', 0,'L', false );	
$pdf->Cell(80,5,'Pago de administracion a del apartamento', '', 0,'L', false );
$pdf->Cell(35,5,'En forma de pago:', '', 0,'L', false );	
$pdf->Cell(70,5,'Efectivo', '', 0,'L', false );
$pdf->Ln(18);
$pdf->Cell(30,5,'Recibido por', '', 0,'L', false );	
$pdf->Cell(80,5,'__________________________', '', 0,'L', false );
$pdf->Cell(30,5,'VALOR TOTAL', '', 0,'L', false );	
$pdf->Cell(80,5,'$768000', '', 0,'L', false );
$pdf->Ln();
$pdf->Cell(30,5,'', '', 0,'L', false );	
$pdf->Cell(80,5,'Administracion ', '', 0,'L', false );
$pdf->Ln();
$pdf->Cell(30,5,'', '', 0,'L', false );	
$pdf->Cell(80,5,'Conjunto residencial altagracia', '', 0,'L', false );
$pdf->Ln(20);
$pdf->Cell(60,5,'_________________________________________________________________________________________________');

$pdf->Image('public/img/logo.png' , 10 ,130, 30 , 28,'PNG');
$pdf->SetFont('Arial','',10);
$pdf->Ln(42);
$pdf->Cell(30,5,'RECIBO DE PAGO No 2839483');

$pdf->Ln(10);
$pdf->Cell(20,5,'BLOQUE:', '', 0,'L', false );	
$pdf->Cell(40,5,'1', '', 0,'L', false );
$pdf->Cell(30,5,'APARTAMENTO:', '', 0,'L', false );	
$pdf->Cell(40,5,'2018', '', 0,'L', false );	
$pdf->Cell(15,5,'FECHA:', '', 0,'L', false );	
$pdf->Cell(15,5,'26/12/2021', '', 0,'L', false );

$pdf->Ln(10);
$pdf->Cell(20,5,'Recibi de :', '', 0,'L', false );	
$pdf->Cell(90,5,'Jerson Reinel Galvez Ensuncho', '', 0,'L', false );
$pdf->Cell(20,5,'Cantidad:', '', 0,'L', false );	
$pdf->Cell(20,5,'$786959', '', 0,'L', false );

$pdf->Ln(10);
$pdf->Cell(30,5,'Por Concepto de :', '', 0,'L', false );	
$pdf->Cell(80,5,'Pago de administracion a del apartamento', '', 0,'L', false );
$pdf->Cell(35,5,'En forma de pago:', '', 0,'L', false );	
$pdf->Cell(70,5,'Efectivo', '', 0,'L', false );
$pdf->Ln(18);
$pdf->Cell(30,5,'Recibido por', '', 0,'L', false );	
$pdf->Cell(80,5,'__________________________', '', 0,'L', false );
$pdf->Cell(30,5,'VALOR TOTAL', '', 0,'L', false );	
$pdf->Cell(80,5,'$768000', '', 0,'L', false );
$pdf->Ln();
$pdf->Cell(30,5,'', '', 0,'L', false );	
$pdf->Cell(80,5,'Administracion ', '', 0,'L', false );
$pdf->Ln();
$pdf->Cell(30,5,'', '', 0,'L', false );	
$pdf->Cell(80,5,'Conjunto residencial altagracia', '', 0,'L', false );
$pdf->Ln(20);

$pdf->Ln(10);
$pdf->Cell(60,5,'Calle 90 # 11 A 27');
$pdf->Ln();
$pdf->Cell(60,5,'Tel. 5803300');
$pdf->Ln();
$pdf->Cell(60,5,'Propiedadhorizontal.com.co');
$pdf->Ln();
$pdf->Cell(60,5,'Ibague - Tolima');

$pdf->Output();


?>
