<?php
include("connectDB.inc.php");
include("securedData.inc.php");

/*
if() {
//reading $_GET

//using mysqli_real_escape_string($link,)

//using secutite_bdd()


} else {
	exit();
}
*/

$query="";
echo $query."<br>";
//SQL injection
//URLcountryVariable1.php?country=" or ""="
//URLcountryVariable1.php?country=USA" or ""="
//SQL injectio, add : " or ""="

//$result=mysqli_query($link,$query) or die($query.' '.mysqli_error($link));


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
//echo "Number of rows ".mysqli_num_rows($result)."<br>";

?>	
</body>
</html>