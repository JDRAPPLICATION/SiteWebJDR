<?php 
include("debut.php");
include("includes/identifiants.php");
?>
    
                    <article class="Farticle">
                                    <header>
                                        <h2>Enregistrement</h2>
                                        <?php
                                        // Connexion à la base de données
                                        if (isset($_POST['pseudo'])) {
                                            // Insertion du message à l'aide d'une requête préparée
                                            $log = $bdd->prepare('INSERT INTO account (pseudo,name,mail,surname,password) VALUES                                     (:pseudo,:surname,:email,:name,:password)');
                                        
                                            $ps=0;
                                        
                                            $reponse = $bdd->query('SELECT * From account');
                                            while ($donnees=$reponse->fetch()){
                                                if($donnees['pseudo']==$_POST['pseudo']){
                                                    $ps=1;
                                                    }
                                                }
                                            if($ps!=1){
                                                $bob= md5($_POST['password']);
                                                $log->execute(array('name' => $_POST['name'], 
                                                                'surname' => $_POST['surname'], 
                                                                'email' => $_POST['email'],
                                                                'pseudo' => $_POST['pseudo'],
                                                                'password' => $bob
                                                            ));
                                                echo "votre compte a bien été enregistré.";
                                        
                                            }elseif ($ps ==1) {
                                                echo "le pseudo a déjà été choisi";
                                            }
                                        }
                                        ?>
                                        <form action="Register.php" method="post">
                                                 <p>
                                                 <label for="name">name</label> : <input type="text" name="name" id="name" /><br />
                                                 <label for="surname">surname</label> :  <input type="text" name="surname" id="surname" /><br />
                                                 <label for="pseudo">pseudo</label> :  <input type="text" name="pseudo" id="pseudo" /><br />
                                                 <label for="email">email</label> :  <input type="email" name="email" id="email" /><br />
                                                 <label for="password">password</label> :  <input type="password" name="password" id="password" /><br />
                                                 <input type="submit" value="Envoyer" />
                                                 </p>
                                          </form>
                                    </header>
                                </article>


    
</html>