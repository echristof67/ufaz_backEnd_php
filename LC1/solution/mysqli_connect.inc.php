<?php
//display_errors
ini_set("display_errors",1);

//arguments, parameters localhost
//localhost
$host="localhost:3308";
$user="root";
$passwd="";
$bd="";//your DB name


//arguments for Alwaysdata
/*
$host="mysql-christoffel.alwaysdata.net";
$user="";
$passwd="";
$bd="";
*/

//$link=@mysqli_connect($host,$user,$passwd,$bd);

//if $link , mysqli_connect_errno() , mysqli_connect_error()
/*
if(!$link){//N2
	echo "Error 1 : code ".mysqli_connect_errno()." , Msg ".mysqli_connect_error();
}
*/

/*
if(mysqli_connect_errno()){//N2
	echo "Error 1 : code ".mysqli_connect_errno()." , Msg ".mysqli_connect_error();
	exit();
}
*/

//set charset mysqli_set_charset : encoding utf8
//mysqli_set_charset($link,'utf8');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//N6
try {
$link = mysqli_connect($host, $user, $passwd, $bd);
mysqli_set_charset($link,"utf8");
} catch (mysqli_sql_exception $e) { 
echo "MySQLi Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
}


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