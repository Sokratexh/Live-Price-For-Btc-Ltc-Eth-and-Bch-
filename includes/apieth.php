 <?php
 header('Content-Type: application/json');
 
 $urlltc = "https://www.bitstamp.net/api/v2/ticker/ethusd/";
 $fgcltc = file_get_contents($urlltc);
 $jsonltc = json_decode($fgcltc, true);
 $ethprice = $jsonltc["last"]; 

 $dataeth = ['ethpreco' => $ethprice ];
 echo json_encode($dataeth);
 
 ?>
