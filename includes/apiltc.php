 <?php
 header('Content-Type: application/json');
 
 $urlltc = "https://www.bitstamp.net/api/v2/ticker/ltcusd/";
 $fgcltc = file_get_contents($urlltc);
 $jsonltc = json_decode($fgcltc, true);
 $priceltc = $jsonltc["last"]; 

 $dataltc = ['ltcpreco' => $priceltc ];
 echo json_encode($dataltc);
 
 ?>
