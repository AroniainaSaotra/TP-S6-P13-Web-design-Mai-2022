<?php 
	
	include("/forms/functions.php");

	$img= $_GET['image'];
	$descri = $_GET['description'];
	
	$insert = insertActu($img,$descri);

?>