<?php
$btct = file_get_contents("https://www.btcturk.com/api/ticker"); 
$btctdecode = json_decode($btct, true); 
$btctdecode ['last']; 

$dosyayicek = file_get_contents("https://btc-e.com/api/2/btc_usd/ticker");  
$decodeislemi = json_decode($dosyayicek, true); 
$decodeislemi['ticker'][last]; 

$btceur = file_get_contents("https://btc-e.com/api/2/btc_eur/ticker"); 
$eurdecode = json_decode($btceur, true); 
$eurdecode ['ticker'][last]; 

$btce = file_get_contents("https://btc-e.com/api/2/btc_rur/ticker"); 
$btcedecode = json_decode($btce, true); 
$btcedecode ['ticker'][last]; 

$bit = file_get_contents("https://btc-e.com/api/2/btc_cnh/ticker"); 
$bitdecode = json_decode($bit, true); 
$bitdecode ['ticker'][last]; 

$ko = file_get_contents("https://btc-e.com/api/2/btc_gbp/ticker"); 
$kodecode = json_decode($ko, true); 
$kodecode ['ticker'][last];


$cad = file_get_contents("https://cavirtex.com/api2/ticker.json"); 
$caddecode = json_decode($cad, true); 
$caddecode ['ticker']['BTCCAD'][last]; 


$JPY = file_get_contents("https://api.kraken.com/0/public/Ticker?pair=XXBTZJPY"); 
$JPYdecode = json_decode($JPY, true); 
$JPYdecode ['result']['XXBTZJPY']['c'][0]; 

$myFile = 'twitterposts2.txt'; 
$myFile2 = '../parabirimi.txt'; 
$myContent = $btctdecode ['last'];
$deco = $decodeislemi['ticker'][last];
$btce = substr($btcedecode ['ticker'][last],0,8);  
$bitde = $bitdecode ['ticker'][last];
$koi = $kodecode['ticker'][last];

$eur = substr($eurdecode ['ticker'][last],0,7); 
$cad = substr($caddecode ['ticker']['BTCCAD'][last],0,6);  
$JPY = substr($JPYdecode ['result']['XXBTZJPY']['c'][0],0,5);  

file_put_contents($myFile, "1 #bitcoin $myContent TL, $deco $, $eur €, $koi GBP, $btce RUR, $JPY ¥, $bitde CNH, $cad CAD #btc");
file_put_contents($myFile2, "1 Bitcoin $myContent TL, $deco $, $eur €, $koi GBP, $btce RUR, $JPY ¥, $bitde CNH, $cad CAD");
?>