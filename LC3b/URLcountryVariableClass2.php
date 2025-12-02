<?php
include("connectDBclass.inc.php");

if(!array_key_exists('country', $_GET)){
	exit();
}

//mysqli class : https://www.php.net/manual/fr/book.mysqli.php
//https://www.php.net/manual/en/mysqli.prepare.php
//return a mysqli_stmt class => $stmt variable / object
//prepare() query with question mark ? as parameter marker
$query="SELECT * FROM catalog WHERE (country = ? )";

$stmt=$mysqliObject->prepare($query);

//mysqli_stmt class https://www.php.net/manual/en/class.mysqli-stmt.php
//https://www.php.net/manual/en/mysqli-stmt.bind-param.php
//bind_param()
$stmt->bind_param('s',$_GET['country']);




//mysqli_stmt class https://www.php.net/manual/en/class.mysqli-stmt.php
//https://www.php.net/manual/en/mysqli-stmt.execute.php
//execute()
$stmt->execute();




//mysqli_stmt class https://www.php.net/manual/en/class.mysqli-stmt.php
//https://www.php.net/manual/en/mysqli-stmt.bind-result.php
//bind_result()
$stmt->bind_result($idCD,$title,$artist,$country,$company,$price,$year);




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>CD catalog, country :<?php echo $_GET['country']; ?></h1>
<?php
//mysqli_stmt class https://www.php.net/manual/en/class.mysqli-stmt.php
//https://www.php.net/manual/en/mysqli-stmt.fetch.php
//fetch() and while loop
while($stmt->fetch()){
echo "$artist, $title, $country<br>";

}




?>	
</body>
</html>