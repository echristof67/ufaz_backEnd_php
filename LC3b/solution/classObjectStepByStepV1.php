<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php
//multi dimensional array professorList
//1st dimension
$professorList=array();

//1st array element with index 0
//2nd dimension, associative array
//properties firstname, lastname
$professorList[0]=array();
$professorList[0]['firstname']="Eric";
$professorList[0]['lastname']="Christoffel";

//index listOfSubjects element
//3rd dimension array
$professorList[0]['listOfSubjects']=array(); 

//auto-increment if no indexes [ ]
$professorList[0]['listOfSubjects'][]="Front-End Web Programming 1";
$professorList[0]['listOfSubjects'][]="Back-End Web Programming 2";
$professorList[0]['listOfSubjects'][]="Electronics";

//for debug only
echo "<pre>";
print_r($professorList);
//var_dump(professorList);
echo "</pre>";

//multi-dimensional array displayed as an HTML content
echo "<p>List of subjects taught by ".$professorList[0]['lastname']."</p>";
echo "<ul>";
//foreach loop, particularly suited for associative array 
foreach ($professorList[0]['listOfSubjects'] as $valueSubject) {
	echo "<li>$valueSubject</li>";
}
echo "</ul>";

//***************************************************
//class & object, array professorList
$professorList=array();

//an array element is an instance of the class
//each array element is an object, instance of the class
//instance new
$professorList[]=new professor("Eric","Christoffel");



//debug before subject list
var_dump($professorList);

//array element 0 is an object displayed as an HTML content
//arrow notation for OOPHP -> (and not dot . notation!)
echo "<p>List of subjects taught by ".$professorList[0]->_firstname.' '.$professorList[0]->_lastname."</p>";



//manual subjects setting, property listOfSubjects which is an array
$professorList[0]->_listOfSubjects[]="Front-End Web Programming";
$professorList[0]->_listOfSubjects[]="Back-End Web Programming";



//debug after testing subject list
var_dump($professorList);

//class method used to displayed full data as a HTML content
//method getProfessorData()
$professorList[0]->getProfessorData();



//***********************************
//***********************************
//***********************************
//class definition
//all properties and methods are public!
//list of properties
class professor {
	public $_firstname;
	public $_lastname;
	public $_listOfSubjects;

//class constructor using a magic function __constructor
	public function __construct($firstname,$lastname){
		$this->_firstname=$firstname;
		$this->_lastname=$lastname;
		$this->_listOfSubjects=array();
	}




//class method

	public function getProfessorData(){
		//$this : the current object
		echo "<p>List of subjects taught by ".$this->_firstname.' '.$this->_lastname."</p>";
		echo "<ul>";
		foreach ($this->_listOfSubjects as $valueSubject) {
			echo "<li>".$valueSubject."</li>";
		}
		echo "</ul>";
	}
	








	
//end class
}




?>