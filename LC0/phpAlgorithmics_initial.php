<?php  
//tracking errors with ini_set()


//$ variables lastname, firstname, then fullname 
//echo value displayed in the body, with <p>, concatenation or "  $  "






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
//echo fullname " ", ' ', concat operator



//case of use of literals { }




//*************************************
//operators, amountExcludingVAT, const _VAT_RATE, VAT, amountIncludingVAT



echo "<p>Initial amount =, amountIncludingVAT = </p>";


//*************************************
//PHP array , grades


//value displayed with print_r(), var_dump(

//print_r()


//array push()

//array_pop()

echo "Value removed <br>";

//var_dump()


//values displayed with an index, concatenation operator . or literals { }





//AVG meanGrades, calculation with array_sum() and count() fcts, errors if no grades, then use if()




//*************************************
//associative array
//meanGradeBySubjects




//foreach loop with associative array




//sorting arrays ksort(), krsort() for associative, sort() for grades array, otherwise indexes are lost, asort() for associative





//*************************************
//conditional testing, discount calculation, variables amount, discountRate


echo "Discount rate =  for the amount = <br>";


//ternary operator: shorter, more readable, simple code



//*************************************
//for loop, sum and product




echo "Sum = <br>";
echo "Product = <br>";



//for loop , multiplication table
//echo writing HTML table
?>
<table border="1">
<?php





?>
</table>
<?php



//*************************************
//user defined function vatCalculation(), global, fct argument, amount, _VAT_RATE, quantity, vatValue
//variable scope: global amount + global, local scope vatValue




echo "<p>VAT = , for the amount of </p>";
//local scope for variable declared in a function
//echo "<p>vatValue : </p>";






?>	
</body>
</html>