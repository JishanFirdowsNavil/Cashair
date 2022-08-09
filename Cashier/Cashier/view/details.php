<?php  
include '../controller/DataController.php';

$name = $_GET['name'];

$pharmacist = pharmacistInfo($name);

	echo $pharmacist['name'];
	echo "<br>";
	echo $pharmacist['e-mail'];
	echo "<br>";
	echo $pharmacist['username'];
	echo "<br>";
	echo $pharmacist['gender'];
	echo "<br>";
	echo $pharmacist['dob'];
	echo "<br>";
	echo "<br>";

	echo "<a href = '../view/pharmacist.php'> Back </a>"; 
	

?>