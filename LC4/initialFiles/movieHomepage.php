<?php
include("connectDB.inc.php");

//$_SESSION to anonymise data


//try error with FROM movie instead of FROM movies
$query="";


//execute the query with query() method

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {




} catch (Exception $e) { 
echo "MySQLi Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
exit();
}	


//create an array movieList, each array element is an instance of a movie class
//while loop  on mysqli result object, with fetch_assoc() method



/*
echo "<pre>";
print_r($listMovies);
echo "</pre>";
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movie Homepage</title>
<style>
	body {font-family: Verdana;font-size:14pt;}
	table {table-layout: auto;width: 800px;border-collapse: collapse;border:1px black solid;}
	th, td {border:1px black solid;}
</style>
</head>
<body>
<nav>
<?php
//code for a new movie



//URL variable
?>
<a href="movieForm.php">New movie</a>
</nav>

<h1>Movie List</h1>

<table>
<thead><tr><th>Title</th><th>Category</th><th>Edit</th><th>Del.</th></tr></thead>
<tbody>
<?php




?>
</tbody>
</table>
	
</body>
</html>
<?php
//class



?>