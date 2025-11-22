<?php


//from Procedural to Object Oriented Programming
//set Timezone (see lecture N2)
$Paris='Europe/Paris';
$Baku='Asia/Baku';
date_default_timezone_set($Baku);

//procedural, date('format')
$dateProcedural=date("Y-m-d H:i:s");
echo "Today, we are the $dateProcedural <br>";

//DateTime object, format('format')
$dateOOP=new DateTime();
echo "Formatting DateTime object ".$dateOOP->format("Y-m-d H:i:s")."<br>";


//From Date functions to DateTime method
//example : timestamp, strtotime() , getTimestamp()
echo "Timestamp Procedural : ".strtotime($dateProcedural)."<br>";
echo "Timestamp DateTime method() : ".$dateOOP->getTimestamp()."<br>";


?>