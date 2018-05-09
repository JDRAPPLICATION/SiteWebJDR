<?php 
include("debut.php");
?>
    
        <article class="Farticle">
                        <h2>Voir ses personnages</h2>   
                            <?php
                            	include("includes/identifiants.php");
                            	if ($_SESSION['level']=='0') {
                            		header("Login.php");
                            		echo '<li><a href="Login.php">cliquez ici pour se connecter</a></li> ';
                            	}else{
                                        $reponse = $bdd->query('SELECT * FROM personage Where id_player ='.$_SESSION['id']);
                            ?>
                                        <form method="post" action="see_character.php">
                             
                                        <label for="perso">quel personnage voulez vous voir ?</label><br />
                                        <select name="perso" id="perso">
                            <?php
                                        while ($donnees = $reponse->fetch())
                                        {
                            ?>
                                           <option value= <?php echo $donnees['id_character'];?> > <?php echo $donnees['name_character']; ?></option>
                            <?php
                                        }
                            ?>
                                        </select>
                                        <p><input type="submit" value="Voir" /></p>
                                    </form>
                            <?php
                            		}
                            
                            ?>
        </article>
    </body>
</html>

