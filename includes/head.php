<!DOCTYPE html>
<html lang="hr">
	<head>
		<meta charset="UTF-8">
		<!--za responzivan izgled uunutar svakog uređaja-->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<!--opis u search engineu stranice-->
		<meta name="description" contetnt="<? php echo $phpdescription; ?>">
		<!--za search engine da sta bolje bude rangiran u pregledu (radi?)-->
		<meta name="keywords" content="<? php echo $pkeywords; ?>">
		<meta name="author" content="VaShA">
		<title><?php echo $ptitle . "Početna";?></title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href ="css/stil.css">
	</head>

	<body>
		<div class="grid">
			<header class="header">
				<!-- <div class="logo"><img src="<?php //echo $logoImg?>" class="image"></div> -->
				<div class="logo">Terminal</div>
				<div class="search">
					<!--form ide ode-->
					<input type="text" name="search" placeholder="Pretraži trgovinu..."/>
					<button type="submit"><img src="<?php echo $searchImg ?>"></button>
				</div>
				<nav class="categories">Cats</nav>
				<div class="userActions">Login</div>
				<div class="userCart">Košarica</div>
			</header>



			