<div id="contenu">
    <h2>Valider les fiches de frais des visiteurs médicaux</h2>
    <h3><legend>Visiteur à sélectionner :</legend></h3>
	<div class="corpsForm">
            <form method="POST" action="index.php?uc=validerFrais&action=VisiteurChoisit"><br/>
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
                           <option label='Visiteur' Selected value='<?php echo $visiteur['id']; ?>'><?php echo $visiteur['prenom']." ".$visiteur['nom'] ."  |".$visiteur['id']; ?>
                    <?php

                        }
                        else
                        {
                    ?>      <option label='Visiteur' value='<?php echo $visiteur['id']; ?>'><?php echo $visiteur['prenom']." ".$visiteur['nom'] ."  |".$visiteur['id']; ?></option><?php
                        }
                    } 
                    ?>
                </select>

                <br/>
                <br/>

                <label for="mois">Mois :</label>

                <select name='mois' id="mois">
                <?php	
                //Affichage des mois
                    while($mois=$listeMois->fetch())
                        {
                            //On Selectionne le mois en cours
                            if(isset($_POST['mois']) && $_POST['mois']==$mois['mois'])
                            {
                ?>              <option label='MoisVisiteurs' Selected value='<?php echo $mois['mois']; ?>'><?php echo GetLibelleMois($mois['mois'])." ".substr($mois['mois'],0,4); ?></option>
                <?php    
                            }
                            else
                            {
                ?>              <option label='MoisVisiteurs' value='<?php echo $mois['mois']; ?>'><?php echo GetLibelleMois($mois['mois'])." ".substr($mois['mois'],0,4); ?></option>
                <?php
                            }
                        }
                ?>  
                </select>
                <br/>
                <br />
                <input type="Submit" value="Valider">
            </form>
        </div>
        <br/>
        
</div>
    