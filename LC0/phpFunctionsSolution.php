<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
body {font-family: Verdana;font-size: 14pt;}	
</style>
</head>
<body>
<?php 
//https://www.php.net/manual/en/funcref.php

//********************************************
//https://www.php.net/manual/en/book.strings.php 
//https://www.php.net/manual/en/book.mbstring.php

//string functions

//strlen()
$text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies viverra dui. Aenean auctor elit eget scelerisque consectetur. Suspendisse varius sollicitudin elit, id blandit magna pellentesque quis. In enim purus, fermentum id convallis id, pharetra non nisi. Sed ut aliquet felis. Aenean eu tellus nisi. Praesent sit amet enim metus. Nam ut diam at massa tincidunt elementum. Quisque ornare a justo in luctus.";
$nbCharacters=strlen($text);
echo "<p>Number of characters : $nbCharacters</p>";

echo "<hr>";
//*******************************************
//strtoupper(), strtolower(), ucfirst(), ucwords(), mb_strtoupper()
$textTUC=strtoupper($text);
echo "<p>$text</p>";
echo "<p>$textTUC</p>";
echo "<p>".ucwords($text)."</p>";

echo "<hr>";

$textWithSpecialCharacters="éèàç";
echo "<p>".strtoupper($textWithSpecialCharacters)."</p>";
echo "<p>".mb_strtoupper($textWithSpecialCharacters)."</p>";

echo "<hr>";

//UTF-8 2-byte Characters
echo "<p>UTF-8 2-byte Characters";
echo '<br>1st byte between \xcO (decimal number 192)and \xdf (decimal number 223)';
echo '<br>2nd byte between \x80 (decimal number 128)and \xbf (decimal number 191)';
$utf8_char="\xc2\xa9";
$unicode_codepoint = mb_ord($utf8_char, 'UTF-8');
$unicode_code='0x'.sprintf('%04x', $unicode_codepoint);
$character=mb_chr($unicode_codepoint, 'UTF-8');
$utf8_hex = implode('', array_map(fn($byte) => sprintf('\\x%02x', ord($byte)), str_split($utf8_char)));
echo "<br>UTF-8 2-byte Characters : $utf8_hex";
echo "<br>Unicode code : $unicode_code";
echo "<br>Character : $character";

echo "<hr>";


//*******************************************
//substr(), mb_substr()
echo "<p>".substr($text,0,10)."</p>";
echo "<p>".substr($text,-10)."</p>";

echo "<hr>\n";
//*******************************************
//trim(), rtrim(), ltrim()
//try it by yourself

//*******************************************
//strip_tags()
$codeHTML="<p><b>Lorem ipsum</b> dolor sit amet</p>\n";
echo $codeHTML;
echo "<br>******************<br>\n";
echo strip_tags($codeHTML);
echo "<br>******************<br>\n";

echo "<hr>\n";
//*******************************************
//htmlentities(), htmlspecialchars() and its inverse htmlspecialchars_decode() 
//view source code
$textWithSpecialCharacters='> éàç € & " <';
echo "\n<p>".htmlentities($textWithSpecialCharacters)."</p>\n";
echo "\n<p>".htmlspecialchars($textWithSpecialCharacters)."</p>\n";


$codeJS='<script>console.log("Malicious JS code excuted! See console.log()")</script>';
echo $codeJS;
echo htmlspecialchars($codeJS)."\n";

echo "<hr>\n";
//*******************************************
//addslashes(), addcslashes(), stripslashes(), stripcslashes()
$textWithQuotes='"Lorem ipsum" dolor sit amet'; 
echo "\n<p>".addslashes($textWithQuotes)."</p>\n";


echo "<hr>\n";
//*******************************************
//nl2br() => \r\n replaced with <br>
//try it by yourself

//*******************************************
//md5() but security issue!
//https://10015.io/tools/md5-encrypt-decrypt
//see https://www.php.net/manual/en/refs.crypto.php , https://www.php.net/manual/en/ref.openssl.php , https://www.php.net/manual/en/function.openssl-encrypt.php

$passwd="abc123";
echo "<p>$passwd<br>".md5($passwd)."</p>";

echo "<hr>\n";
//*********************
//openssl_encrypt() alternative, more robust
$passwd = "abc123";
$cryptingKey = "theCryptingKey";

// CRYPTING
$encryptedPasswd = openssl_encrypt($passwd, "AES-128-ECB" ,$cryptingKey);
var_dump($encryptedPasswd);

//DECRYPTING
$decryptedPasswd = openssl_decrypt($encryptedPasswd, "AES-128-ECB" ,$cryptingKey);
var_dump($decryptedPasswd);

echo "<hr>\n";
//********************************************
//https://www.php.net/manual/en/refs.calendar.php
//date functions https://www.php.net/manual/en/ref.datetime.php

//date() https://www.php.net/manual/en/function.date.php format : https://www.php.net/manual/en/datetime.format.php
$today=date("d/m/Y H:i:s");
echo "<p>Today $today , YearWeek number ".date("oW")."</p>";

$today=date_create("now");
echo "\n<p>".date_format($today,"Y-m-d H:i:s")."</p>\n";

//*******************************************
//date_default_timezone_set() https://www.php.net/manual/en/function.date-default-timezone-set.php  TimeZone https://www.php.net/manual/en/class.datetimezone.php , https://www.php.net/manual/en/timezones.php , https://www.php.net/manual/en/timezones.asia.php
date_default_timezone_set('Europe/Paris');
$today=date("d/m/Y H:i:s");
echo "<p>Today $today</p>";

date_default_timezone_set('Asia/Baku');
$today=date("d/m/Y H:i:s");
echo "<p>Today $today</p>";



echo "<hr>\n";
//*******************************************
//time(), mktime() https://www.php.net/manual/en/function.time.php https://www.php.net/manual/en/function.mktime.php
$timestamp=time();
echo "<p>Current timestamp : $timestamp</p>";



echo "<hr>\n";

//*******************************************
//strtotime() create a timestamp from an English textual datetime
//https://www.php.net/manual/en/function.strtotime.php
$timestamp1=strtotime("+1 week",$timestamp);
echo "<p>Today : ".date('d/m/Y',$timestamp)."</p>\n";
echo "<p>in 1 week ".date('d/m/Y',$timestamp1)."</p>\n";


echo "<hr>\n";

//*******************************************
//strftime() https://www.php.net/manual/en/function.strftime.php and setlocale() https://www.php.net/manual/en/function.setlocale.php
setlocale(LC_TIME,"fra_FRA.utf8");
//setlocale(LC_TIME,"ita_ITA.utf8");
echo "<p>Date : ".strftime("%A %d %B %Y",strtotime("+1 month"))."</p>";
//echo "<p>Today, ".utf8_encode(strftime("%A %d %B %Y",strtotime("+1 month")))."</p>";

setlocale(LC_TIME,"aze_AZE.utf8");
echo "<p>Date : ".strftime("%A %d %B %Y")."</p>";



echo "<hr>\n";


?>	
</body>
</html>