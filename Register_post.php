
<?php
// Connexion à la base de données
include("includes/identifiants.php");
include("debut.php");

// Insertion du message à l'aide d'une requête préparée
$log = $bdd->prepare('INSERT INTO account (name,surname,mail,pseudo,password) VALUES(:name,:surname,:email,:pseudo,:password)');

$log->execute(array('name' => $_POST['name'], 
					'surname' => $_POST['surname'], 
					'email' => $_POST['email'],
					'pseudo' => $_POST['pseudo'],
					'password' => $_POST['password']
				));

header('index.php');
?>