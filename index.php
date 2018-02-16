<?php 
	$ptitle = "Terminal | "; 
	$current_page ="home";
	$profileImg = "images/person/personImg.png";//default je "images/person/personDefault.png"
	$productImg = "images/product/productImg.png";//default je "images/product/productDefault.png"
	$searchImg = "images/searchIcon.png"; 

	
	//u superglobalnoj varijabli _server pod kljucen document_root, vrati mi C:\wamp64\www//
	require_once $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/includes/slider.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/includes/content.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/includes/prefooter.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php'; 

?>

