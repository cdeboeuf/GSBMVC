<div id="contenu">
    <h2>Suivre les fiches de frais des visiteurs médicaux</h2>
    <h3><legend>Visiteur à sélectionner :</legend></h3>
	<div class="corpsForm">
            <!-- Formulaire qui récupere l'id du visiteur et qui change l'action -->
            <form method="POST" action="index.php?uc=suivrePaiement&action=VisiteurSelected"><br/>
                <label for="visiteur">Visiteur :</label>
                <select name="Id">
                    <?php
                    //Affichage des visiteurs
                    while($visiteur=$listeVisiteur->fetch())
                    {
                        //On Selectionne le visiteurs en cours
                        if(isset($_POST['Id']) && $_POST['Id']==$visiteur['id'])
                        {
                    ?>
                            <option label='Visiteur' Selected value='<?php echo $visiteur['id']; ?>'><?php echo $visiteur['id']." ".$visiteur['nom']; ?></option>
                    <?php

                        }
                        else
                        {
                    ?>      <option label='Visiteur' value='<?php echo $visiteur['id']; ?>'><?php echo $visiteur['id']." ".$visiteur['nom']; ?></option><?php
                        }
                    } 
                    ?>
                </select>

                <br/>
                <br/>
            <input type="Submit" value="Valider" style="left: 87%; position: relative">
            </form>          
        </div>
        <br/>       
</div>