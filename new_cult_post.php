<?php
// Connexion à la base de données
include("includes/identifiants.php"); 
include("debut.php");



// Insertion du message à l'aide d'une requête préparée



$agi = $bdd -> prepare('INSERT INTO cult(name_cult, type_god, duty) VALUES(:name, :type_god, :duty)');
$agi->execute(array(    'name' => $_POST['name_cult'],
                        'type_god' => $_POST['type_god'],
                        'duty' => $_POST['duty'],
                  ));

?>
		<article class="Farticle">
			<h2>Nouveau Culte</h2>
			<p>Le culte a bien été enregistré</p>
		</article>
	</body>
</html>