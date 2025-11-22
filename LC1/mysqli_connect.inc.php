<?php
//display_errors


//arguments, parameters localhost
//localhost
$host="";
$user="";
$passwd="";
$bd="";


//arguments for Alwaysdata
/*
$host="mysql-???????.alwaysdata.net";
$user="";
$passwd="";
$bd="";
*/

//$link=mysqli_connect()



//if $link , mysqli_connect_errno() , mysqli_connect_error()
/*
if(){//N2
	echo "Error 1 : code ".." , Msg ".;
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
/*
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//N6
try {
$link = mysqli_connect($host, $user, $passwd, $bd);
mysqli_set_charset($link,"utf8");
} catch (mysqli_sql_exception $e) { 
echo "MySQLi Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
}
*/

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