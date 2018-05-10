<?php
	session_start();
	include("includes/functions.php");
	include("includes/constants.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>JDR ESAIP</title>
		<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8" />
		<link rel="stylesheet" href="CSS_1.css" />
		<link rel="icon" type="image/x-ico" href="logo.ico" />
	</head>


	<body>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<div id="rectangle"><p>JDR ESAIP Club</p></div>
					
					<div>
						<nav>
							<ul>
								<li class="menu-acceuil"><a href="index.php">Acceuil</a></li>
								<li class="menu-esaipJ"><a href="Stormbringer.php">Stormbringer</a>
									<ul class="submenu">
									     <li><a href="National.php">Nationalité</a></li>
									     <li><a href="WorkInProgress.php">Classe</a></li>
									     <li><a href="WorkInProgress.php">Histoire du Monde</a></li>
									</ul>
								</li>
								<li class="menu-esaipE"><a href="#">Donjon et Dragons</a>
									<ul class="submenu">
									     <li><a href="WorkInProgress.php">Nationalité</a></li>
									     <li><a href="WorkInProgress.php">Classe</a></li>
									     <li><a href="WorkInProgress.php">Histoire du Monde</a></li>
									</ul>
								</li>
								<?php 
								if (isset($_SESSION['pseudo'])) {
									echo '<li class="menu-esaipE"><a href="#">Personnages Stormbringer</a>
											<ul class="submenu">
									     		<li><a href="character_creation.php">Créer un personnage</a></li>
									    		<li><a href="select_character.php">Voir ses personnages</a></li>
											    <li><a href="character_registration.php">Enregistrer un personnages</a></li>
											</ul>
										</li>';
								}
								if (isset($_SESSION['pseudo']) && $_SESSION['level']== MJ ) {
									echo '<li class="menu-esaipE"><a href="#">section MJ</a>
											<ul class="submenu">
									     		<li><a href="new_nationality.php">Créer une nationlitée</a></li>
									    		<li><a href="create_class.php">Créer une classe</a></li>
									    		<li><a href="new_cult.php">Créer un culte</a></li>
									    		<li><a href="new_cult.php">Gérer les classes, cultes ou nationalité</a></li>
											</ul>
										</li>';
								}
								?>
								<li class="menu-esaipJ"><a href="#">Login</a>
									<ul class="submenu">
									     
									     <?php 
									     if (isset($_SESSION['pseudo'])) {
	    									echo '<li><a href="disconnect.php">Se Deconnecter</a></li>';
	    								}else{
	    									echo '<li><a href="Register.php">S\'enregistrer</a></li>';
	    									echo '<li><a href="Login.php">Se connecter</a></li>';
	    								}
	   									 ?>
									</ul>
								</li>
								
							</ul>
						</nav>
					</div>
<?php

	//Attribution des variables de session
	$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
	$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
	$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
	
?>
