<?php 
	$ptitle = "Terminal | "; 
	$current_page ="kat";
	$profileImg = "images/person/personImg.png";//default je "images/person/personDefault.png"
	$productImg = "images/product/productImg.png";//default je "images/product/productDefault.png"
	$searchImg = "images/searchIcon.png"; 

	
	//u superglobalnoj varijabli _server pod kljucen document_root, vrati mi C:\wamp64\www//
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/head.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/kategorije/konzole_i_igre/konzole/ps4.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/sidebar.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/prefooter.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/footer.php'; 

