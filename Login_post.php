<?php 
include("debut.php");
?>
				<article class="Farticle">
					<h2>Connexion</h2>
					<?php
					include("includes/identifiants.php");
					$message='';
					if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
					{
					    $message = '<p>Tous les champs doivent être remplis.</p>
						<p>Cliquez <a href="Login.php">ici</a> pour revenir</p>';
					}
					else //On check le mot de passe
					{
					    $query=$bdd->prepare('SELECT * FROM account Where pseudo = :pseudo');
						$query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
					    $query->execute();
					    $data=$query->fetch();
						if ($data['password'] == md5($_POST['password'])) // Acces OK !
						{
						    $_SESSION['pseudo'] = $data['pseudo'];
						    $_SESSION['level'] = $data['level'];
						    $_SESSION['id'] = $data['id_account'];
						    $message = '<p>Bienvenue '.$data['pseudo'].', 
					        	vous êtes maintenant connecté!</p>
					        	<p>Cliquez <a href="index.php">ici</a> 
					        	pour revenir à la page d accueil</p>'; 
						}
						else // Acces pas OK !
						{
					    	$message = '<p>Une erreur s\'est produite 
					    		pendant votre identification.<br /> Le mot de passe ou le pseudo 
					    		entré n\'est pas correcte.</p><p>Cliquez <a href="Login.php">ici</a> 
					    		pour revenir à la page précédente
					    		<br /><br />Cliquez <a href="index.php">ici</a> 
					    		pour revenir à la page d accueil</p>';
						}
					    $query->CloseCursor();
					}
					echo $message.'</div></body></html>';
					?>
				</article>
</html>