<div id="contenu">
    <h2>Suivre les fiches de frais des visiteurs médicaux</h2>
    <div class="corpsForm">
        <form method="POST" action="index.php?uc=suivrePaiement&action=moisSelected"><br/>
                <label for="visiteur">Mois :</label>
                <select name="mois">
                    <?php
                    //Affichage des visiteurs
                    while($visiteur=$Details2->fetch())
                    {

                    ?>      <option label='Visiteur' value='<?php echo $visiteur['mois']; ?>'><?php echo $visiteur['mois']; ?></option><?php

                    } 
                    ?>
                </select>

                <br/>
                <br/>
                <input type="hidden" name="Id" value='<?php echo $_POST['Id']; ?>'>
<input type="Submit" value="Valider" style="left: 87%; position: relative">
            </form>
    </div><TABLE BORDER="1"> 
  <CAPTION> Fiche de frais de <?php echo $_POST['Id']?>: </CAPTION> 
  <TR> 
 <TH> Mois </TH> 
 <TH> Derniere modification </TH> 
 <TH> Etat </TH> 
 <TH> Montant </TH> 
  </TR> 
   
    <?php while($detail=$Details->fetch())
                {
 ?><TR><Td> <?php echo $detail['mois'] ?></Td> 
 <TD><?php echo $detail['dateModif'] ?></TD> 
 <TD><?php echo $detail['idEtat']?></TD> 
 <TD><?php echo $detail['montantValide'] ?></TD> 
        
    </TR> <?php }?>
</TABLE> 
            <br/>
        </div>

       
   