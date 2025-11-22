<?php
//connectDB
$host="localhost";
$user="root";
$passwd="";
$db="ufaz_php_pw";

//@ to prevent a warning display
$link=@mysqli_connect($host,$user,$passwd,$db);

if(mysqli_connect_errno()){
	echo "Error No :".mysqli_connect_errno()." , Msg : ".mysqli_connect_error()."<br>";
	exit();
}

//encoding
mysqli_set_charset($link,'utf8');

$startTime = getmicrotime();

//read csv data file
$handle=fopen("./MOCK_DATA_generator_customers_withSemicolon.csv","r");

$buffer=trim(fgets($handle,4096));//read 1st line (column header)



//loop for each line until EOF
while(!feof($handle)){
$buffer=trim(fgets($handle,4096));

//explode data with semicolon separator
$d=explode(';',$buffer);

$query="INSERT INTO customers (customer_id,customerTitle,customerLastname,customerFirstname,customerStreetAddress,customerStreetAddress2,customerZipCode,customerCity,customerPhone,customerEmail,customerRegisterDate) values ($d[0]";

foreach ($d as $value) {	
$query.=",\"".mysqli_real_escape_string($link,$value)."\"";
}

$query.=")";

$result=mysqli_query($link,$query);


}//while


mysqli_close($link);


$endTime = getmicrotime();
echo "Execution time = ".round( $endTime - $startTime, 3);

//****************************************************************
function getmicrotime(){ 
    list($usec, $sec) = explode(" ",microtime()); 
    return ((float)$usec + (float)$sec); 
}
//******************
?>