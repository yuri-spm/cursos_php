<?php

use Dompdf\Dompdf;
use Dompdf\Options;
require __DIR__."/vendor/autoload.php";

$dompdf = new Dompdf(["enable_remote" =>true]);
$dompdf->loadHtml("<h1>Ola mundo!</h1><p>Esse e o meu primero pdf!</p>");
//$dompdf->setPaper("A4","landscape");

//ob_start();
//require  __DIR__."/contents/users.php";
//
//$dompdf->loadHtml(ob_get_clean());

ob_start();
require  __DIR__."/contents/profile.php";

$dompdf->loadHtml(ob_get_clean());
$dompdf->setPaper("A4","landscape");


$dompdf->render();
$dompdf->stream("file.pdf",["Attachment" => false]);

//$dompdf->stream("file.pdf");
//var_dump($dompdf->output());



