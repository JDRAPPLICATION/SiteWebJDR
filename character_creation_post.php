<?php 
	include("debut.php");
	include("includes/identifiants.php");
							$_SESSION['FOR'] =0;
						    $_SESSION['CON'] =0;
						    $_SESSION['TAI'] =0;
						    $_SESSION['INT'] =0;
						    $_SESSION['POU'] =0;
						    $_SESSION['DEX'] =0;
						    $_SESSION['CHA'] =0;

						    $_SESSION['NA'] =0;
						    $_SESSION['id_NA'] =0;
						    $_SESSION['CS1'] =0;
						    $_SESSION['CS2'] =0;
						    $_SESSION['CS3'] =0;
						    $_SESSION['id_CS1'] =0;
						    $_SESSION['id_CS2'] =0;
						    $_SESSION['id_CS3'] =0;
						    $_SESSION['CU'] =0;
						    $_SESSION['PV'] =0;
						    $_SESSION['MS'] =0;

						    $_SESSION['boCO'] =0;
						    $_SESSION['EVaT'] =0;
						    $_SESSION['PS'] =0;
						    $_SESSION['CAR'] =0;
						    $_SESSION['MEM'] =0;
						    $_SESSION['CONdesPLA'] =0;
						    $_SESSION['CONdesPOI'] =0;
						    $_SESSION['ARTI'] =0;
						    $_SESSION['LC'] =0;
						    $_SESSION['BM'] =0;
						    $_SESSION['HM'] =0;
						    $_SESSION['PAN'] =0;
						    $_SESSION['MAB'] =0;
						    $_SESSION['ORG'] =0;

						    $_SESSION['boCOMM'] =0;
						    $_SESSION['CRE'] =0;
						    $_SESSION['ELO'] =0;
						    $_SESSION['PERSU'] =0;
						    $_SESSION['CHAN'] =0;

						    $_SESSION['boMAN'] =0;
						    $_SESSION['JON'] =0;
						    $_SESSION['CRO'] =0;
						    $_SESSION['PASPAS'] =0;
						    $_SESSION['FPI'] =0;
						    $_SESSION['FNE'] =0;

						    $_SESSION['boPERC'] =0;
						    $_SESSION['EQUILI'] =0;
						    $_SESSION['ECOU'] =0;
						    $_SESSION['SEN'] =0;
						    $_SESSION['CHER'] =0;
						    $_SESSION['VOIR'] =0;
						    $_SESSION['GOU'] =0;
						    $_SESSION['PIST'] =0;

						    $_SESSION['boAGI'] =0;
						    $_SESSION['GRI'] =0;
						    $_SESSION['EVI'] =0;
						    $_SESSION['SAU'] =0;
						    $_SESSION['EQUITA'] =0;
						    $_SESSION['NAG'] =0;
						    $_SESSION['CULBU'] =0;

						    $_SESSION['boDIS'] =0;
						    $_SESSION['EMB'] =0;
						    $_SESSION['DISS'] =0;
						    $_SESSION['SCA'] =0;
						    $_SESSION['MOUSI'] =0;
						    $_SESSION['COUBOU'] =0;

						    $_SESSION['boAT'] =0;
						    $_SESSION['boPA'] =0;
						    $_SESSION['boDAM'] ="";
						    $_SESSION['boDAT'] ="";

						    $_SESSION['A1n'] =0;
						    $_SESSION['A1a'] =0;
						    $_SESSION['A1p'] =0;
						    $_SESSION['A1d'] =0;

						    $_SESSION['A2n'] =0;
						    $_SESSION['A2a'] =0;
						    $_SESSION['A2p'] =0;
						    $_SESSION['A2d'] =0;

						    $_SESSION['A3n'] =0;
						    $_SESSION['A3a'] =0;
						    $_SESSION['A3p'] =0;
						    $_SESSION['A3d'] =0;

						    $_SESSION['A4n'] =0;
						    $_SESSION['A4a'] =0;
						    $_SESSION['A4p'] =0;
						    $_SESSION['A4d'] =0;

						    $_SESSION['A5n'] =0;
						    $_SESSION['A5a'] =0;
						    $_SESSION['A5p'] =0;
						    $_SESSION['A5d'] =0;

						    $_SESSION['A6n'] =0;
						    $_SESSION['A6a'] =0;
						    $_SESSION['A6p'] =0;
						    $_SESSION['A6d'] =0;


						    $_SESSION['money'] =0;
						    $_SESSION['SEX'] =$_POST['sex'];
						    $_SESSION['AFLI'] ="";


	echo $_POST['l1'];
	if ($_POST['l1'] != $_POST['l2'] && $_POST['l1'] != $_POST['l3'] && $_POST['l1'] != $_POST['l4'] && $_POST['l1'] != $_POST['l5'] && $_POST['l1'] != $_POST['l6'] && $_POST['l1'] != $_POST['l7'] && $_POST['l1'] != $_POST['l8']) {
		if ($_POST['l2'] != $_POST['l3'] && $_POST['l2'] != $_POST['l4'] && $_POST['l2'] != $_POST['l5'] && $_POST['l2'] != $_POST['l6'] && $_POST['l2'] != $_POST['l7'] && $_POST['l2'] != $_POST['l8']) {
			if ($_POST['l3'] != $_POST['l4'] && $_POST['l3'] != $_POST['l5'] && $_POST['l3'] != $_POST['l6'] && $_POST['l3'] != $_POST['l7'] && $_POST['l3'] != $_POST['l8']) {
				if ($_POST['l4'] != $_POST['l5'] && $_POST['l4'] != $_POST['l6'] && $_POST['l4'] != $_POST['l7'] && $_POST['l4'] != $_POST['l8']) {
					if ($_POST['l5'] != $_POST['l6'] && $_POST['l5'] != $_POST['l7'] && $_POST['l5'] != $_POST['l8']) {
						if ($_POST['l6'] != $_POST['l7'] && $_POST['l6'] != $_POST['l8']) {
							if ($_POST['l7'] != $_POST['l8']) {
								define($_POST['l1'], $_SESSION['l1']);
								define($_POST['l2'], $_SESSION['l2']);
								define($_POST['l3'], $_SESSION['l3']);
								define($_POST['l4'], $_SESSION['l4']);
								define($_POST['l5'], $_SESSION['l5']);
								define($_POST['l6'], $_SESSION['l6']);
								define($_POST['l7'], $_SESSION['l7']);
								define($_POST['l8'], $_SESSION['l8']);

								/* reseignement characteristique de base */
								$_SESSION['FOR'] = FORC;
						    	$_SESSION['CON'] = CON;
						    	$_SESSION['TAI'] = TAI;
						   		$_SESSION['INT'] = INTE;
						    	$_SESSION['POU'] = POU;
						    	$_SESSION['DEX'] = DEX;
						    	$_SESSION['CHA'] = CHA;

						    	/*calcul Santé mmental de base ( sans modificateur class et nationalité) */
								$_SESSION['MS'] = $_SESSION['MS'] + 5 * $_SESSION['POU'];

								/* calcul des bonus en fonction de la nationalité*/
						    	$_SESSION['NA'] = $_POST['na'];
						    	switch ($_POST['na']) {
						    		
						    		case 'Melniboné':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,10);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,6);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 3;
						    			$_SESSION['MS'] = $_SESSION['MS'] + 20;
						    			$_SESSION['CS1'] = "Guerrier";
						    			$_SESSION['CS2'] = "Noble";
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS3'] = "Sorcier";
						    			}
						    			break;
						    		case 'Pan Tang':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,8);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,8);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 1;
						    			$_SESSION['MS'] = $_SESSION['MS'] + 10;
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS1'] = "Sorcier";
						    				$_SESSION['CS2'] = "Prêtre";
						    			}else{
						    				$_SESSION['CS1'] = "Guerrier";
						    			}
						    			$t = rand(1,100);
						    			if ($t <+ 20) {
						    				$_SESSION['CS3'] = "Noble";
						    			}
						    			break;
						    		case 'Myrrhyn':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,6);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,6);
						    			$_SESSION['CHA'] = $_SESSION['CHA'] + rand(1,6);
						    			if ($_SESSION['SEX'] == "F") {
						    				$_SESSION['MS'] = $_SESSION['MS'] + 5;
						    			}
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS3'] = "Sorcier";
						    			}
						    			if ($_SESSION['TAI']>=9) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 2;
						    			}
						    			break;
						    		case 'Dharijor':
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,4);
						    			break;
						    		case 'Jharkor':
						    			$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,4);
						    			$_SESSION['DEX'] = $_SESSION['DEX'] + rand(1,4);	
						    			break;
						    		case 'Shazaar':
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			break;
						    		case 'Tarkesh':
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,4);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 1;
						    			}
						    			break;
						    		case 'Vilmir':
						    			
						    			break;
						    		case 'Ilmiora':
						    			$_SESSION['CHA'] = $_SESSION['CHA'] + rand(1,4);
						    			break;
						    		case 'Nadsokor':
						    			$number = rand(1,20);
						    			$_SESSION['CON'] = $_SESSION['CON'] - rand(1,6);
						    			$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,6);
						    			$_SESSION['CS1'] = "Mendiant";
						    			$_SESSION['AFLI'] = SetAFLI($number);
						    			if ($number == 20) {
						    				$_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
						    			}
						    			break;
						    		case 'Désert de Larmes':
						    			$_SESSION['DEX'] = $_SESSION['DEX'] + rand(1,4);
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,6);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,4);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 1;
						    			}
						    			$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 80 + rand(1,6);
						    			break;
						    		case 'Eshmir':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,4);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,6);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 2;
						    			}
						    			$_SESSION['MS'] = $_SESSION['MS'] + 5;
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS3'] = "Sorcier";
						    				$_SESSION['CS1'] = "Prêtre";
						    				if ($_SESSION['FOR'] >= 13) {
						    					$_SESSION['CS2'] = "Guerrier";
						    				}
						    			}
						    			break;
						    		case 'Ile des Cités Pourpres':
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,4);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			break;
						    		case 'Argimiliar':

						    			break;
						    		case 'Pikarayd':
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,4) + rand(1,4);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 1;
						    			break;
						    		case 'Lormyr':
						    			$_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 2;
						    			break;
						    		case 'Filkhar':
						    			$_SESSION['DEX'] = $_SESSION['DEX'] + rand(1,4);
						    			break;
						    		case 'Oin':
						    			if ($_SESSION['INT']>=10) {
						    				$_SESSION['INT'] = $_SESSION['INT'] - rand(1,6);
						    			}
						    			if ($_SESSION['DEX']>=10) {
						    				$_SESSION['DEX'] = $_SESSION['DEX'] - rand(1,6);
						    			}
						    			if ($_SESSION['POU']>=10) {
						    				$_SESSION['POU'] = $_SESSION['POU'] - rand(1,6);
						    			}
						    			$_SESSION['MS'] = $_SESSION['MS'] - 10;
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			break;
						    		case 'Yu':
						    			if ($_SESSION['INT']>=10) {
						    				$_SESSION['INT'] = $_SESSION['INT'] - rand(1,6);
						    			}
						    			if ($_SESSION['CHA']>=10) {
						    				$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,6);
						    			}
						    			if ($_SESSION['POU']>=10) {
						    				$_SESSION['POU'] = $_SESSION['POU'] - rand(1,6);
						    			}
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,6);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			$_SESSION['MS'] = $_SESSION['MS'] - 10;
						    			break;
						    		case 'Org':
						    			if ($_SESSION['POU']>=10) {
						    				$_SESSION['POU'] = $_SESSION['POU'] - rand(1,4) - rand(1,4);
						    			}
						    			if ($_SESSION['CHA']>=10) {
						    				$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,4) - rand(1,4);
						    			}
						    			if ($_SESSION['INT']>=10) {
						    				$_SESSION['INT'] = $_SESSION['INT'] - rand(1,6);
						    			}
						    			if ($_SESSION['DEX']>=10) {
						    				$_SESSION['DEX'] = $_SESSION['DEX'] - rand(1,6);
						    			}
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,4);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,8);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 2;
						    			}
						    			$_SESSION['MS'] = $_SESSION['MS'] - 20;
						    			$t = rand(1,20);
						    			if ($t == 1) {
						    				$_SESSION['CS1'] = "Noble";
						    			}else {
						    				$_SESSION['CS1'] = "Chasseur";
						    			}
						    			break;
						    	}





						    	/* calcul des pv (sans modif charact)*/
						    	$_SESSION['PV'] =$_SESSION['PV']+ $_SESSION['CON'] + 1;
						    	

								

								/*calcul de tout les différents bonus*/ 
								if ($_SESSION['TAI'] > 12) {
						    		$_SESSION['PV'] = $_SESSION['PV'] + $_SESSION['TAI'] - 12;
									$_SESSION['boPA'] = $_SESSION['boPA'] - $_SESSION['TAI'] + 12;
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - $_SESSION['TAI'] + 12;
									$_SESSION['boDIS'] = $_SESSION['boDIS'] - $_SESSION['TAI'] + 12;
						    	}elseif ($_SESSION['TAI']<9) {
						    		$_SESSION['PV'] = $_SESSION['PV'] - 9 + $_SESSION['TAI'];
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + 9 - $_SESSION['TAI'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] + 9 - $_SESSION['TAI'];
									$_SESSION['boDIS'] = $_SESSION['boDIS'] + 9 - $_SESSION['TAI'];				
						    	} 
								if ($_SESSION['FOR'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boAGI'] = $_SESSION['boAGI'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['FOR'] - 12;
						    	}elseif ($_SESSION['FOR']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['FOR'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['FOR'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - 9 + $_SESSION['FOR'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['FOR'];
								}

								if ($_SESSION['INT'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boPERC'] = $_SESSION['boPERC'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boCO'] = $_SESSION['boCO'] + ($_SESSION['INT'] - 12)*2;
						    		$_SESSION['bDISC'] = $_SESSION['boDIS'] + $_SESSION['INT'] - 12;
						    		$_SESSION['bDCOMM'] = $_SESSION['boCOMM'] + $_SESSION['INT'] - 12;
						    	}elseif ($_SESSION['INT']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['INT'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['INT'];
									$_SESSION['boPERC'] = $_SESSION['boPERC'] - 9 + $_SESSION['INT'];
									$_SESSION['boCO'] = $_SESSION['boCO'] + (- 9 + $_SESSION['INT']) * 2;
									$_SESSION['boDIS'] = $_SESSION['boDIS'] - 9 + $_SESSION['INT'];
									$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['INT'];	
								}

								if ($_SESSION['POU'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boPERC'] = $_SESSION['boPERC'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] + $_SESSION['POU'] - 12;
						    	}elseif ($_SESSION['POU']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['POU'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['POU'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['POU'];
									$_SESSION['boPERC'] = $_SESSION['boPERC'] - 9 + $_SESSION['POU'];
									$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['POU'];
								}

								if ($_SESSION['DEX'] > 12) {
									$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['DEX'] - 12;
									$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['DEX'] - 12;
									$_SESSION['boAGI'] = $_SESSION['boAGI'] + $_SESSION['DEX'] - 12;
									$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['DEX'] - 12;
						    	}elseif ($_SESSION['DEX']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['DEX'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['DEX'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - 9 + $_SESSION['DEX'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['DEX'];
						    	}

						    	if ($_SESSION['CHA'] > 12) {
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] + $_SESSION['DEX'] - 12;
						    	}elseif ($_SESSION['CHA'] < 9) {
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['POU'];
						    	}


						    	if (($_SESSION['FOR']+$_SESSION['TAI']) < 50) {
						    		$_SESSION['boDAM'] = $_SESSION['boDAM'] + SetBonusDamageM(($_SESSION['FOR']+$_SESSION['TAI']));
						    		$_SESSION['boDAT'] = $_SESSION['boDAT'] + SetBonusDamageT(($_SESSION['FOR']+$_SESSION['TAI']));
						    	}else{
						    		$_SESSION['boDAM'] =$_SESSION['boDAM'] + "+3D6";
						    		$_SESSION['boDAT'] =$_SESSION['boDAT'] + "+3D4";
						    	}

						    	
						    	switch ($_SESSION['NA']) {
						    		
						    		case 'Melniboné':
						    			$_SESSION['id_NA'] = 1;
						    			?>
						    			<article class="Farticle">
						    				<form action="character_creation_post.php" method="post">
						    					
													<h2 style="text-align:center">Choix de la classe (tiré sur 1D100 dans le tableau des nationalité)</h2>
													<p>Votre nationalité vous permet de jouer: <?php echo $_SESSION['CS1'].",".$_SESSION['CS2'].",".$_SESSION['CS3'] ?></p><br>
													<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			
						    			break;
						    		case 'Pan Tang':
						    			$_SESSION['id_NA'] = 2;
						    			?>
						    			<article class="Farticle">
						    				<form action="character_creation_post.php" method="post">
													<h2 style="text-align:center">Choix de la classe (tiré sur 1D100 dans le tableau des nationalité)</h2>
													<p>Votre nationalité vous permet de jouer: <?php echo $_SESSION['CS1'].",".$_SESSION['CS2'].",".$_SESSION['CS3'] ?></p><br>
													<?php if ($_SESSION['CS3']=="Noble") {
						    							echo "<p>De plus vous pourrez jouer un noble ! :) </p><br><br>";
						    							}
						    						?>
													<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Myrrhyn':
						    			$_SESSION['id_NA'] = 3;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    			if ($SC1 == "Marin" || $SC1 == "Voleur" || $SC1 == "Mendiant") {
						    				$SC1 = "Guerrier";
						    			}
						    			if ($SC2 == "Marin" || $SC2 == "Voleur" || $SC2 == "Mendiant") {
						    				$SC2 = "Guerrier";
						    			}?>
						    			<article class="Farticle">
						    				<form action="character_creation_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Dharijor':
						    		$_SESSION['id_NA'] = 4;
						    		$SC1 = SetClass(rand(1,100));
						    		$SC2 = SetClass(rand(1,100));
						    		}?>
						    			<article class="Farticle">
						    				<form action="character_creation_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			
						    			break;
						    		case 'Jharkor':
						    			$_SESSION['id_NA'] = 5;	
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		}?>
						    			<article class="Farticle">
						    				<form action="character_creation_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Shazaar':
						    			$_SESSION['id_NA'] = 6;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		}?>
						    			<article class="Farticle">
						    				<form action="character_creation_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php																						
						    			break;
						    		case 'Tarkesh':
						    			$_SESSION['id_NA'] = 7;
						    			?>								
										<?php
						    			break;
						    		case 'Vilmir':
						    			$_SESSION['id_NA'] = 8;
						    			break;
						    		case 'Ilmiora':
						    			$_SESSION['id_NA'] = 9;
						    			break;
						    		case 'Nadsokor':
						    			$_SESSION['id_NA'] = 10;
						    			break;
						    		case 'Désert de Larmes':
						    			$_SESSION['id_NA'] = 11;
						    			break;
						    		case 'Eshmir':
						    			$_SESSION['id_NA'] = 12;
						    			break;
						    		case 'Ile des Cités Pourpres':
						    			$_SESSION['id_NA'] = 13;
						    			break;
						    		case 'Argimiliar':
						    			$_SESSION['id_NA'] = 14;
						    			break;
						    		case 'Pikarayd':
						    			$_SESSION['id_NA'] = 15;
						    			break;
						    		case 'Lormyr':
						    			$_SESSION['id_NA'] = 16;
						    			break;
						    		case 'Filkhar':
						    			$_SESSION['id_NA'] = 17;
						    			break;
						    		case 'Oin':
						    			$_SESSION['id_NA'] = 18;
						    			break;
						    		case 'Yu':
						    			$_SESSION['id_NA'] = 19;
						    			break;
						    		case 'Org':
						    			$_SESSION['id_NA'] = 20;
						    			break;
						    	}
						    	


							}
							else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
						 }
						 else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
					}
					else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
				}
				else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
			}
			else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
		}
		else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
	}else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
?>
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