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
		<link rel="stylesheet" type="text/css" href ="css/stil.css">
		<!--includan jQuery ako bude treba-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.js"
  				integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
  				crossorigin="anonymous">
  		</script>
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



			