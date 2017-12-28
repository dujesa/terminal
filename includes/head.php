<?php
	session_start();
?>

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
		<title><?php echo $ptitle . $ppage;?></title>
		<link rel="shortcut icon" type="image/ico" href="images/miniLogo.ico">

		<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href ="css/stil.css">
		
	</head>

	<body>
		<div class="grid">
			<header class="header">
				<!-- <div class="logo"><img src="<?php //echo $logoImg?>" class="image"></div> -->
				<div class="logo">

					<a href="index.php">
							<img src="images/logo.png">
					</a>	

				</div>
				<div class="search">
					<!--form ide ode-->
					<input type="text" name="search" placeholder="Pretraži trgovinu..."/>
					<button type="submit"><img src="<?php echo $searchImg ?>"></button>
				</div>
				<nav class="categories">Cats</nav>
				
				
				<div class="userActions">
	
						
						<?php
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
						?>
									

				</div>
				<div class="userCart">

						<a href="kosarica.php">
							Košarifca
						</a>		

				</div>
			</header>



			