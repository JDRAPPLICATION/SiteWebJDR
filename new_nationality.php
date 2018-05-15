<?php 
include("debut.php");
?>
    


<article class="Farticle">
                                <header>
                                    <h2>New natinality</h2>
                                        <form action="new_nationality_post.php" method="post">

                                                 <p1>New Nationality</p1> </br>
                                                <label for="name">name</label> :  <input type="text" name="name" id="name" /><br />
                                                <label for="bonus">bonus</label> :  <textarea name="bonus" id="bonus"></textarea><br />
                                                <label for="description">description</label> :  <textarea name="description" id="description"></textarea>
                                                </br>
                                        
                                        
                                                    <input type="submit" value="Envoyer" name="Envoyer">
                                                    </p>
                                        </form>
                                </header>
                            </article>
    </body>
</html>