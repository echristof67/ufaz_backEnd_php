<?php  
//tracking errors with ini_set()
//0 to hide warnings, 1 to display them
ini_set("display_errors",1);

//$variableName : $lastname, $firstname, then $fullname 
//echo to display a HTML content, 
//with <p>, the . concatenation operator, or "  $var  "
$lastname="Christoffel";
$firstname='Eric';
$fullname=$lastname.' '.$firstname;
$fullnameBis="$lastname $firstname";



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
body {font-family: Verdana;font-size: 14pt;}	
</style>
</head>
<body>
<h1>PHP basics, step by step</h1>	
<?php  
//echo fullname " with $var ", ' ', concat operator

echo "<p>Hello $fullname</p>";
echo '<p>Hello $fullname</p>';
echo '<p>Hello '.$fullname.'</p>';
echo "<p>Hello $fullnameBis</p>";


//case of use of literals { }
echo "<p>Hello {$fullname}string</p>";
echo "<p>Hello $fullnamestring</p>";//warning


//*************************************
//operators, amountExcludingVAT, const _VAT_RATE, VAT, amountIncludingVAT
$amountExcludingVAT=100;
const _VAT_RATE=0.2;
$VAT=$amountExcludingVAT*_VAT_RATE;
$amountIncludingVAT=$amountExcludingVAT+$VAT;

echo "<p>Initial amount = $amountExcludingVAT, amountIncludingVAT = $amountIncludingVAT</p>";


//*************************************
//PHP array , grades

$grades=array(12,16,14);
$grades=[12,16,14];

//value displayed with print_r(), var_dump()


//print_r()
echo "<pre>";
print_r($grades);
echo "</pre>";

var_dump($grades);

//array push()
$nbElements=array_push($grades,10,8);

echo "<p>$nbElements after array_push()</p>";
var_dump($grades);

//array_pop()
$valueRemoved=array_pop($grades);
echo "Value removed $valueRemoved<br>";

var_dump($grades);

//values displayed with an index, 
//concatenation operator . or literals { }

echo "<p>Your 1st grade was ".$grades[0]." /20</p>";
echo "<p>Your 2nd grade was $grades[1] /20</p>";
echo "<p>Your 1st grade was {$grades[0]} /20</p>";



//AVG meanGrades, calculation with 
//array_sum() and count() fcts, 
//errors if no grades => division by 0
//then use if()
if(count($grades)>0) {
$AVG=array_sum($grades)/count($grades);
echo "<p>Your average is $AVG</p>";
} else {
echo "No grades!";
}

//**********************************
//works on Alwaysdata, but
//depends on error handling parameters of the server used
//if DivisionByZeroError occurs!!
//version try ... catch for warning (not an error!)
/*
$grades=array();
set_error_handler(function($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});
try {
$AVG=array_sum($grades)/count($grades);
echo "AVG = $AVG<br>";
} catch(Exception $e){
echo 'Exception attrapée : ' . $e->getMessage()." at line ".$e->getLine()." in file ".$e->getFile()."<br>";
}
restore_error_handler();
/*

/* ***********************
More robust solution, taking into account DivisionByZeroError
*/
$grades = []; // Empty array

set_error_handler(function($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

try {
    // before AVG calculation, prevents division by 0 
    //(depends on server configuration)
    if (count($grades) === 0) {
        throw new Exception("=> Empty array, division by 0 will occur!");
    }
    $AVG = array_sum($grades) / count($grades);
    echo "Mean value : " . $AVG;
} catch (Exception $e) {
    // Exception handling
    echo "Error : " . $e->getMessage();
}

restore_error_handler();

//*************************************
//associative array
//meanGradeBySubjects
$meanGradeBySubjects=array("HTML"=>15,"CSS"=>14,"PHP"=>17);
echo "<pre>";
print_r($meanGradeBySubjects);
echo "</pre>";

//foreach loop with associative array
foreach ($meanGradeBySubjects as $key => $value) {
	echo "Subject $key Grade $value<br>";
}


//sorting arrays ksort(), krsort() for associative, sort() for grades array, otherwise indexes are lost, asort() for associative

ksort($meanGradeBySubjects);
echo "<pre>";
print_r($meanGradeBySubjects);
echo "</pre>";

arsort($meanGradeBySubjects);
echo "<pre>";
print_r($meanGradeBySubjects);
echo "</pre>";

sort($meanGradeBySubjects);
echo "<pre>";
print_r($meanGradeBySubjects);
echo "</pre>";



//conditional testing, discount calculation, 
//variables amount, discountRate
$amount=1250;

if($amount>=2000){
	$discountRate=0.1;
} else if($amount>=1000){// and $amount<2000
	$discountRate=0.05;
} else {
	$discountRate=0;
}

echo "Discount rate $discountRate for the amount = $amount<br>";


//ternary operator: shorter, more readable, simple code
$a=56;
echo ($a > 50) ? "greater":"less";
echo "<br>";


//for loop, sum and product
$n=4;
$sum=0;
$product=1;

for($i=1;$i<=$n;$i++){
//$sum=$sum+$i;   
$sum+=$i;
$product=$product*$i;
//$product*=$i
}

echo "Sum = $sum<br>";
echo "Product = $product<br>";



//for loop , multiplication table
//echo writing HTML table
?>
<table border="1">
<?php
for ($rows=1; $rows <=10 ; $rows++) {//for $rows 
echo "<tr>";
for ($cols=1; $cols <=10 ; $cols++) { 
echo "<td>".($rows*$cols)."</td>";
}
echo "</tr>";
}//end for $rows

echo "</table>";



//user defined function vatCalculation(), 
//global, fct argument, amount, _VAT_RATE, quantity, vatValue
//variable scope: global amount + global, local scope vatValue


$amountExcludingVAT=100;
$quantity=2;
$VAT=vatCalculation($quantity);



function vatCalculation($qty){
global $amountExcludingVAT;
$vatValue=$amountExcludingVAT*$qty*_VAT_RATE;
return $vatValue;	
}

echo "<p>VAT = $VAT, for the amount of $amountExcludingVAT</p>";


//local scope for variable declared in a function

//try catch warning case, and not an error!

set_error_handler(function($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});


try {
    echo "<p>vatValue : $vatValue</p>";
} catch (Exception $e) {
    echo '=>Exception handling : ' . $e->getMessage()." at line ".$e->getLine()."<br> in file ".$e->getFile()."<br>";
}

restore_error_handler();//Restore the default error handler



?>	
</body>
</html>