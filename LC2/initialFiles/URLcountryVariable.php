<?php
include("connectDB.inc.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Use URL variables to pass data</title>
</head>
<body>
<h1>CD list from a given country</h1>
<p>Click for a country below:<br>
<?php
$query="";
//$result=mysqli_query($link,$query);

while($var=mysqli_fetch_assoc($result)){
//echo "<a href=\"\">".."</a><br>\n";


}//fin while




?>

</body>
</html>