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

echo "<p>Number of characters : </p>";


//*******************************************
//strtoupper(), strtolower(), ucfirst(), ucwords(), mb_strtoupper()
echo "<p>$text</p>";




$textWithSpecialCharacters="éèàç";



//*******************************************
//substr(), mb_substr()



//*******************************************
//trim(), rtrim(), ltrim()


//*******************************************
//strip_tags()
$codeHTML="<p><b>Lorem ipsum</b> dolor sit amet</p>";
echo $codeHTML;
echo "<br>******************<br>";

echo "<br>******************<br>";


//*******************************************
//htmlentities(), htmlspecialchars(), htmlspecialchars_decode()
//view source code, use \n LF in the code



//*******************************************
//addslashes(), addcslashes(), stripslashes(), stripcslashes()
$textWithQuotes='"Lorem ipsum" dolor sit amet'; 



//*******************************************
//nl2br() => \r\n replaced with <br>



//*******************************************
//md5() but security issue!
//https://10015.io/tools/md5-encrypt-decrypt
//see https://www.php.net/manual/en/refs.crypto.php , https://www.php.net/manual/en/ref.openssl.php , https://www.php.net/manual/en/function.openssl-encrypt.php
$passwd="abc123";




//********************************************
//https://www.php.net/manual/en/refs.calendar.php
//date functions https://www.php.net/manual/en/ref.datetime.php

//date() https://www.php.net/manual/en/function.date.php format : https://www.php.net/manual/en/datetime.format.php




//*******************************************
//date_default_timezone_set() https://www.php.net/manual/en/function.date-default-timezone-set.php  TimeZone https://www.php.net/manual/en/class.datetimezone.php , https://www.php.net/manual/en/timezones.php , https://www.php.net/manual/en/timezones.asia.php
//Europe/Paris   Asia/Baku





//*******************************************
//time(), mktime() https://www.php.net/manual/en/function.time.php https://www.php.net/manual/en/function.mktime.php

echo "<p>Current timestamp : </p>";



//*******************************************
//strtotime() https://www.php.net/manual/en/function.strtotime.php





//*******************************************
//strftime() https://www.php.net/manual/en/function.strftime.php and setlocale() https://www.php.net/manual/en/function.setlocale.php
//fra_FRA   ita_ITA  aze_AZE.utf8
//utf8_encode()






?>	
</body>
</html>