<?php
$btct = file_get_contents("https://www.btcturk.com/api/ticker"); 
$btctdecode = json_decode($btct, true); 
$btctdecode ['last']; 

$dosyayicek = file_get_contents("http://campbx.com/api/xticker.php");  
$decodeislemi = json_decode($dosyayicek, true); 
$decodeislemi['Last Trade']; 

$btce = file_get_contents("https://btc-e.com/api/2/btc_usd/ticker"); 
$btcedecode = json_decode($btce, true); 
$btcedecode ['ticker'][last]; 

$bit = file_get_contents("https://www.bitstamp.net/api/ticker/"); 
$bitdecode = json_decode($bit, true); 
$bitdecode ['last'];

//$ko = file_get_contents("https://www.koinim.com/ticker/"); 
//$kodecode = json_decode($ko, true); 
//$kodecode ['sell'];

$cad= file_get_contents("https://cavirtex.com/api2/ticker.json"); 
$caddecode = json_decode($cad, true); 
$caddecode ['ticker']['BTCCAD'][last]; 

$sos = file_get_contents("https://cex.io/api/last_price/BTC/USD"); 
$sodecode = json_decode($sos, true); 
$sodecode ['lprice'];

$btcde = file_get_contents("https://bitcoinapi.de/v1/YOUR API KEY/rate.json");
$btcdedecode = json_decode($btcde,true);
$btcdedecode['rate_weighted'];


$myFile = 'twitterposts.txt'; 
$myFile2 = '../firmalar.txt'; 
$myContent = substr($btctdecode ['last'],0,6); 
$deco = $decodeislemi['Last Trade']; 
$btce = $btcedecode ['ticker'][last]; 
$bitde = $bitdecode ['last'];
//$koi = $kodecode['sell'];
$so = substr($sodecode ['lprice'],0,6);
$cad = substr($caddecode ['ticker']['BTCCAD'][last],0,6); 
$btcde = substr($btcdedecode['rate_weighted'],0,6); 


file_put_contents($myFile, "BTCTurk $myContent TL BTCe $btce $ CampBx $deco $ BitStamp $bitde $ Cavirtex $cad $ CEXIO $so $ Bitcoin.de $btcde € #Bitcoin #btc");
file_put_contents($myFile2, "BTCTurk $myContent TL BTCe $btce $ CampBx $deco $ BitStamp $bitde $ Cavirtex $cad $ CEXIO $so $ Bitcoin.de $btcde €");
?>