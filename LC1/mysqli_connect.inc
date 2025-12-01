<?php
//display_errors
ini_set("display_errors",1);

//arguments, parameters localhost
//localhost
$host="localhost:3306";
$user="root";
$passwd="";
$bd="ufaz_php_2025_1";


//arguments for Alwaysdata
/*
$host="mysql-christoffel.alwaysdata.net";
$user="98509_ufaz2025";
$passwd="AtS88Vi75d";
$bd="christoffel_ufaz2025";
*/

//$link=mysqli_connect($host,$user,$passwd,$bd);



//if $link , mysqli_connect_errno() , mysqli_connect_error()
/*
if(!$link){//N2
	echo "Error 1 : code ".mysqli_connect_errno()." , Msg ".mysqli_connect_error();
}
*/

/*
if(){//N2
	echo "Error 2: code ".." , Msg ".;
}
*/

//set charset mysqli_set_charset : encoding utf8

//try ... catch...
//with mysqli_sql_exception $e

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//N6
try {
$link = mysqli_connect($host, $user, $passwd, $bd);
mysqli_set_charset($link,"utf8");
} catch (mysqli_sql_exception $e) { 
echo "MySQLi Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
}


//with Exception $e
/*
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//N7
try {
$link = mysqli_connect($host, $user, $passwd, $bd);
mysqli_set_charset($link,"utf8");
} catch (Exception $e) { 
echo "MySQLi Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
}
*/

?>