<?php 
	
	include("/forms/functions.php");

	$continent = $_GET['continent'];
	$descri = $_GET['description'];
	
	$insert = insertCas($descri,$continent);

?>