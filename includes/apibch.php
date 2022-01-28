 <?php
 header('Content-Type: application/json');
 
 $urlbtc = "https://www.bitstamp.net/api/v2/ticker/bchusd/";
 $fgcbtc = file_get_contents($urlbtc);
 $jsonbtc = json_decode($fgcbtc, true);
 $pricebtc = $jsonbtc["last"];

 $databch = ['bchpreco' => $pricebtc ];
 //$databch = ['bchpreco' => (time() % 1000) * 3];
 echo json_encode($databch);
 
 ?>
