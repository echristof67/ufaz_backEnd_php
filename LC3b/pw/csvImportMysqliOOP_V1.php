<?php
//connectDB
$host="localhost";
$user="root";
$passwd="";
$db="ufaz_php_pw";

//https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection
//https://return-true.com/fill-mysql-table-with-data-from-csv/
//https://revplit.com/pages/php/php_mysql_prepared_statements.php  (PDO)

@$mysqli = new mysqli($host,$user,$passwd,$db);
if($mysqli->connect_errno) {
//  exit('Error connecting to database '.$mysqli->connect_error);
	echo "Error No :".$mysqli->connect_errno." , Msg : ".$mysqli->connect_error."<br>";
	exit();

}

//********* below is needed only for try... catch...
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//*****************************

$mysqli->set_charset("utf8");//utf8mb4

$startTime = getmicrotime();

//read csv data file
$handle=fopen("./MOCK_DATA_generator_customers_withSemicolon.csv","r");

$d=fgetcsv($handle, 1000, ';');//to remove the first line, column names!

//prepare statement
$queryStatement=$mysqli->prepare("INSERT INTO customers (customer_id,customerTitle,customerLastname,customerFirstname,customerStreetAddress,customerStreetAddress2,customerZipCode,customerCity,customerPhone,customerEmail,customerRegisterDate) values (?,?,?,?,?,?,?,?,?,?,?)");



//loop for each line until EOF
while($d=fgetcsv($handle, 1000, ';')){


//bind parameter : bind variable to ?
$queryStatement->bind_param('issssssssss',$d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9],$d[10]);
$queryStatement->execute();

}//while

$queryStatement->close();

$mysqli->close();


$endTime = getmicrotime();
echo "Execution time = ".round( $endTime - $startTime, 3);

//****************************************************************
function getmicrotime(){ 
    list($usec, $sec) = explode(" ",microtime()); 
    return ((float)$usec + (float)$sec); 
}
//******************
?>