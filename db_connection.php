<?php
function OpenCon()
 {
	$servername = "localhost"; // default
    $username = "root"; // root is username
    $password = "";
    $dbname = "cloth";

 $conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
   
?>


