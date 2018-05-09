<?php 
include("debut.php");
?>

    <article class="Farticle">

                                <header>
                                    <h2>Nouvelle Classe</h2>
                                      <form action="create_class_post.php" method="post">

        <label for="name">name</label> :  <input type="text" name="name" id="name" /><br />
        <label for="bonus">bonus</label> :  <textarea name="bonus" id="bonus"></textarea>
        </br>


            <input type="submit" value="Envoyer" name="Envoyer">
    </p>
    </form>  
                                </header>
                            </article>
    </body>
</html>
