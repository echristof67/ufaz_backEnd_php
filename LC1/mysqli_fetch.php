<?php
ini_set('display_errors',1);

include("mysqli_connect.inc.php");


$query="SELECT * FROM catalog";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
$result=mysqli_query($link,$query);
$nbRows=mysqli_num_rows($result);

} catch (mysqli_sql_exception $e) { 
echo "MySQLi Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<p>Number of rows from the resultset : <?php echo $nbRows; ?></p>
<?php
while($var=mysqli_fetch_assoc($result)){
//var_dump($var);
extract($var);
echo "$artist : ".$var["title"]."<br>";
}//end while



?>	
</body>
</html>