	<?php
	if(!empty($res))
	{
        ?>
            <div class="corpsForm">
                <form method="POST" action="index.php?uc=validerFrais&action=VisiteurChoisit&action2=FraitForfait" onsubmit="return confirm('Etes-vous sûr de vouloir modifier les Frais Forfaits ?');">
                    <input type='hidden' name='Id' value='<?php echo $_POST['Id']; ?>'>
                    <input type='hidden' name='mois' value='<?php echo $_POST['mois']; ?>'>
                    <fieldset>
                        <legend><h4>Elements forfaitisés :</h4></legend>
                        <p id="FraisForfait">
                            <?php 
                            foreach($res as $tab)
                            {
                                echo'<label for="'.$tab['libelle'].'">* '.$tab['libelle'].' :</label><input size="10" maxlength="5" type="text" id="Forfait" Value="'.$tab['quantite'].'" name="'.$tab['idfrais'].'"><br><br>';
                            }
                            ?>
                        </p> 
                        <?php
                        if(isset($MajFraitForfait))
                        {
                            echo"Vos Frais Forfaits ont été modifiés avec succès !";
                        }
                        ?>
                        <br />               
                        <br />
                        <input type="Submit" value="Valider">
                    </fieldset>
                </form>
            </div>
            <br>
            
            <div class="corpsForm">
                <fieldset>
                    <legend><h4>Descriptif des éléments hors-forfait</h4></legend>
                    <table width="100%" Cellpadding="10">
                        <th>Date</th>
                        <th>Libellé</th>
                        <th>Montant</th>
                        <?php 
                        foreach($FraitHorsForfait as $TabHorsForfait)
                        {
                        ?>
                            <form method="POST" action ="index.php?uc=validerFrais&action=VisiteurChoisit&action2=FraitHorsForfait" onsubmit="return confirm('Voulez-vous vraiment supprimer ce frais hors forfait ?');">
                                <input type='hidden' name='Id' value='<?php echo $_POST['Id']; ?>'>
                                <input type='hidden'  name='mois' value='<?php echo $_POST['mois']; ?>'>
                                <tr>
                                    <td>
                                        <?php echo $TabHorsForfait['date']; ?>
                                    </td>

                                    <td>
                                        <?php echo $TabHorsForfait['libelle']; ?>
                                    </td>

                                    <td>
                                        <?php echo $TabHorsForfait['montant']; ?>
                                    </td>

                                    <td align=center><input  type="Submit" value="Supprimer"/></td>
                                </tr>
                                <input type='hidden' name='IdHorsForfait' value='<?php echo $TabHorsForfait['id']; ?>'>
                                <input type='hidden' name='LibHorsForfait' value='<?php echo $TabHorsForfait['libelle']; ?>'>
                            </form>

                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    if(isset($MajFraitHorsForfait))
                    {
                        ?>Le frais hors forfait <?php echo $_POST['LibHorsForfait']; ?> à été supprimé.<?php
                    }
                }       
                else
                {
                    echo"Pas de fiche de frais pour ce visiteur et ce mois.";
                }
                ?>

                <form method="POST" onSubmit="return(confirm('Voulez-vous valider cette fiche ?'));" action="index.php?uc=validerFrais&action=selectionnerVisiteur&action2=FicheValide">
                    <input type='hidden' name='Id' value='<?php echo $_POST['Id']; ?>'>
                    <input type='hidden' name='mois' value='<?php echo $_POST['mois']; ?>'>
                    <input type='Submit' value='Valider la fiche'>
                </form>
            </fieldset>
            <br />
        </div>
        <br />
        <br />