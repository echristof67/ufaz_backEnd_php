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
<style>
	body {font-family: Verdana;font-size: 12pt;}
	table {table-layout: auto;width: 800px;border:1px solid black;border-collapse: collapse;}
	th, td {border:1px solid black;}
</style>
</head>
<body>
<p>Number of rows from the resultset : <?php echo $nbRows; ?></p>
<table>
<caption>CD Catalog</caption>
<thead><tr><th>idCD</th><th>Title</th><th>Artist</th><th>Country</th><th>Company</th><th>Price</th><th>Year</th></tr></thead>
<tbody>
	
<?php
while($var=mysqli_fetch_assoc($result)){
/*
echo "<pre>";
print_r($var);
echo "</pre>";
*/
extract($var);
//echo $var['idCD']." : $title $artist<br>";

echo "<tr>";
echo "<td>$idCD</td>";
echo "<td>".$var['title']."</td>";
echo "<td>{$var['artist']}</td>";
echo "<td>$country</td>";
echo "<td>".$var['company']."</td>";
echo "<td>{$var['price']}</td>";
echo "<td>$year</td>";
echo "</tr>";
}//end while



?>	

</tbody>
</table>

</body>
</html>