<?php
include("connectDB.inc.php");
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/

//URL variable exists? $_SESSION with the URL variable value exists?
//retrieve idMovie from the code (anonymised URL variable)
/*
if(){
	
} else {
	exit();
}
*/


//reading the categories to write the <select> list
//query and query(), returns a mysqli_result object
//listCategories array
//while + fetch_assoc() or array assigned with fetch_all(MYSQLI_ASSOC), but index !=idCatagory!
$query="";


//editing a movie, if $idMovie > 0
/*
if(){
//query with parameter marker ?
$query="";
//prepare() returns mysqli_stmt object

//bind_param()

//execute()

//bind_result()
$stmt->bind_result($idMovie,$titleMovie,$idCategory,$validMovie);

//fetch(), no while why only one result set returned!


}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movie web form</title>
<style>
	body {font-family: Verdana;font-size:14pt;}
</style>
</head>
<body>
<h1>Movie data</h1>
<form action="movieFormUpdate.php" method="post">
<input type="hidden" name="code" value="">
Movie title <input type="text" name="titleMovie" ><br>
Category <select name="idCategory" size="1">
<?php
//writing <option> from listCategories array



?>
</select><br>
<button>Send</button>

</form>	
</body>
</html>