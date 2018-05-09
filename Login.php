<?php
	include("includes/identifiants.php");
	include("debut.php");
?>

				<article class="Farticle">
					<h2>Connexion</h2>
					<?php
					$titre="Connexion";
					
					
					//include("menu.php");
					//if ($_SESSION['level']!=0) erreur(ERR_IS_CO);
					if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
					{
					    echo '<form method="post" action="Login_post.php">
					    	<p>
					    		<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
					    		<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
					    	</p>
					    <p><input type="submit" value="Connexion" /></p></form>
					    <a href="Register.php">Pas encore inscrit ?</a>
						';
					}else{
						echo'<label>Vous êtes connecté</label>';
					}					
					?>
				</article>

</html>
