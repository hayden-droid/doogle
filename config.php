<?php
ob_start();

$dbname = "dbs13001276";
$dbhost = "db5015954980.hosting-data.io";
$dbuser = "dbu569456";
$dbpass = "Hi9hay9den";

try 
{
	$con = new PDO("mysql:dbname=$dbname;host=$dbhost", "$dbuser", "$dbpass");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) 
{
	echo "Connection failed: " . $e->getMessage();
}
?>
