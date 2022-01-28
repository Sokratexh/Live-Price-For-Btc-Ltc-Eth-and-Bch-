 <?php
 header('Content-Type: application/json');

 $urlbtc = "https://www.bitstamp.net/api/ticker/";
 $fgcbtc = file_get_contents($urlbtc);
 $jsonbtc = json_decode($fgcbtc, true);
 $pricebtc = $jsonbtc["last"];

 $data = ['btcpreco' => $pricebtc ];
 echo json_encode($data);
 ?>
