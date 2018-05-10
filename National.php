<?php 
include("debut.php");
include("includes/identifiants.php");
?>

					<div>

							<article id="Allarticle">
								<header>
									<h2>Les Nationalités</h2>
								</header>
								<p>La nationalité de votre personnage influence énormémément sur le jeu. Par exemple</br>
									................................................................</p>
							</article>

							<section>
								<?php
    		           				$reponse = $bdd->query('SELECT * FROM nationality');
    		           		 		while ($donnees = $reponse->fetch())
    		           				 {
    		        			?>
    		                			<section>
										<article id="Allarticle">
											<header>
												<h2><?php echo $donnees['name'];?></h2>
											</header>
											<p><?php echo $donnees['description']?></p>
											<h1>bonus de nationalité</h1>
											<p><?php echo $donnees['bonus']; ?></p>
										</article>
									</section>
    		        			<?php
    		        			    }
    		        			?>
					</div>

				<!-- Footer -->
				
					<footer id=footer>
						<section>
							<section>
								<h3>Adresse</h3>
								<p>Rue 8 mai 1945<br />
								Saint-Barthelemy D'Anjou, 49124</p>
							</section>
							<section>
								<h3>Telephone</h3>
								<p><a href="#">00-00-00-00-00</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">ESAIPLan@hotmail.fr</a></p>
							</section>
							<section>
							<h3>&copy; Untitled</h3><h3>Design: <a href="#">ESAIP Administration</a></h3>
							</section>
						</section>
					</footer>


	</body>
</html>