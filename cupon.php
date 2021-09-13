<?php

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new HTML2PDF('L', array( 70,  200), 'es', true, 'UTF-8', array(15, 15, 15, 18));
$html2pdf->pdf->SetDisplayMode('fullpage');

ob_start();
require_once  'cuponhtml.php';
$html = ob_get_clean();


$html2pdf->writeHTML($html);
$html2pdf->Output('cupon.pdf','D');

?>
