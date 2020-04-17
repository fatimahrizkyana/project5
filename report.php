<?php
require 'vendor/autoload.php';
use Dompdf\dompdf;

$dompdf = new dompdf();
$dompdf->loadHtml('Menggunakan Library DOMpdf unutk Membuat Report PDF dengan DOMPDF');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('hasil_report.pdf');
?>