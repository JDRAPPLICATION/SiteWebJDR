<?php 
include("debut.php");
?>
    <article class="Farticle">
                                <header>
                                    <h2>New Cult</h2>
                                        <form action="new_cult_post.php" method="post">
                                             <label for="name_cult">name_cult</label> :  <input type="text" name="name_cult" id="name_cult" /><br />
                                             <label for="type_god">type_god</label> : <select name="type_god">
                                                                                         <option value="Chaos" >Chaos</option>
                                                                                         <option value="Loyal" >Loyal</option>
                                                                                         <option value="Seigneur des bêtes" >Seigneur des bêtes</option>
                                                                                         <option value="Elementaire feu" >Elementaire feu</option>
                                                                                         <option value="Elementaire air" >Elementaire air</option>
                                                                                         <option value="Elementaire eau" >Elementaire eau</option>
                                                                                         <option value="Elementaire terre" >Elementaire terre</option>
                                                                                     </select><br />
                                             <label for="duty">duty</label> :  <textarea name="duty" id="duty"></textarea>
                                             </br>
                                        
                                        
                                                 <input type="submit" value="Envoyer" name="Envoyer">
                                        </form>
                                </header>
                            </article>

    </body>
</html>