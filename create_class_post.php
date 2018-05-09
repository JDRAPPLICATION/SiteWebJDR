<?php
// Connexion à la base de données
include("includes/identifiants.php");
include("debut.php");

// Insertion du message à l'aide d'une requête préparée



$agi = $bdd -> prepare('INSERT INTO social_class(name, bonus) VALUES(:name, :bonus)');
$agi->execute(array(    'name' => $_POST['name'],
                        'bonus' => $_POST['bonus'],
                  ));

?>

<article class="Farticle">
			<h2>Nouvelle class</h2>
			<p>La classe a bien été enregistrée</p>
		</article>
	</body>
</html>