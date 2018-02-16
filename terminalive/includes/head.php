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
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet"> 
		<?php
			if ($current_page == "home") {
  				print('<link rel="stylesheet" type="text/css" href="css/stil.css">');
					} 		
			else {
  				print('<link rel="stylesheet" type="text/css" href="css/stil_cat.css">');
					}
		?>
	</head>

	<body>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<div class="grid">
			<header class="header">
				<!-- <div class="logo"><img src="<?php //echo $logoImg?>" class="image"></div> -->
				<div class="logo"><a href="index.php" ><img src="images/logo.png" height="60" width="260"></a></div>
				<div class="search">
					<!--form ide ode-->
					<input type="text" name="search" placeholder="Pretraži trgovinu..."/>
					<button type="submit"><img src="<?php echo $searchImg ?>"></button>
				</div>
				<nav class="categories">
					  <div class="dropdown">
					    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Racunala i oprema
					    <span class="caret"></span>  </button>
					    <ul class="dropdown-menu">
					      <li class="dropdown-header">Racunala</li>
					      <li><a href="#">Osobna racunala</a></li>
					      <li><a href="#">Laptopi</a></li>
					      <li><a href="#">Laptopi - Dodatna oprema</a></li>
					      <li class="divider"></li>
					      <li class="dropdown-header">Komponente</li>
					      <li><a href="#">Graficka</a></li>
					      <li><a href="#">Procesor</a></li>
					      <li><a href="#">HDD</a></li>
					      <li class="dropdown-header">Periferija</li>
					      <li><a href="#">Misevi</a></li>
					      <li><a href="#">Tipkovnice</a></li>
					      <li><a href="#">Monitori</a></li>
					    </ul>
					  </div>
					  <div class="dropdown">
					    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Konzole i igre
					    <span class="caret"></span>  </button>
					    <ul class="dropdown-menu">
					      <li class="dropdown-header">Konzole</li>
					      <li><a href="kategorija.php">Playstation 4</a></li>
					      <li><a href="#">Xbox One</a></li>
					      <li><a href="#">Nintendo Switch</a></li>
					      <li class="divider"></li>
					      <li class="dropdown-header">Igre</li>
					      <li><a href="#">Igre za playstation 4</a></li>
					      <li><a href="#">Igre za Xbox One</a></li>
					      <li><a href="#">Igre za Nintendo Switch</a></li>					      
					    </ul>
					</div>
					  <div class="dropdown">
					    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Smartphone i tableti
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
					      <li class="dropdown-header">Smartphone</li>
					      <li><a href="#">iPhone</a></li>
					      <li><a href="#">Huawei</a></li>
					      <li><a href="#">Samsung</a></li>
					      <li class="divider"></li>
					      <li class="dropdown-header">Tableti</li>
					      <li><a href="#">Huawei tableti</a></li>
					      <li><a href="#">iPad</a></li>
					      <li><a href="#">Lenovo tableti</a></li>	
					      <li><a href="#">Samsung tableti</a></li>				  
					    </ul>
					</div>
				</nav>
				<div class="userActions">						<?php
							//provjeravan preko niza u sesiji jeli logiran, drukciji headeri se ispisuju
							if(!isset($_SESSION['username'])) {
									
								//ako nije logiran
								echo'<a class=login href="prijava.php">
								 Prijava </a>';
							} else {

								//ako je logiran
								echo '<a class=uid>'.'<img id="profileImage" class="uid" src="images/person/personDefault">'. $_SESSION['username'].'</a>';
								echo '<img class="headerIcons icon1" src= "">'.'<img class="headerIcons icon2" src= "">'.'<img class="headerIcons icon3" src= "png">';
								echo '<form class="logout" action="includes/inc/odjava.inc.php" method="POST">
								 	<button class="btn btn-default" type="submit" name="logoutSubmit">Logout</button>
								 	</form></a>';
								 /*	$_SESSION['fist_name']
									$_SESSION['last_name']
									$_SESSION['email']
									$_SESSION['username']
									$_SESSION['profileImage']*/
							}
						?></div>
				<div class="userCart"><a href="kosarica.php">Košarica / 0,00 KN</a></div>
			</header>



			