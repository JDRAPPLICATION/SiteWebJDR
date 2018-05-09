<?php
// Connexion à la base de données
include("includes/identifiants.php");
include("debut.php");


// Insertion du message à l'aide d'une requête préparée



$agi = $bdd -> prepare('INSERT INTO nationality(name, bonus, description) VALUES(:name, :bonus, :description)');
$agi->execute(array(    'name' => $_POST['name'],
                        'bonus' => $_POST['bonus'],
                        'description' => $_POST['description'],
                  ));

?>
<article class="Farticle">
			<h2>Nouvelle nationalitée</h2>
			<p>La nouvelle nationalité a bien été enregistrée</p>
		</article>
	</body>
</html>