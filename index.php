<?php 
	$ptitle = "Terminal | "; 
	$logoImg = "images/logo.png"; 
	$searchImg = "images/searchIcon.png"; 
//u superglobalnoj varijabli _server pod kljucen document_root, vrati mi C:\wamp64\www//

	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/head.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/slider.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/sidebar.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/content.php'; 
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/footer.php'; 

?>



