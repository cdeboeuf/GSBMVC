<?php
if(!empty($res))
{
?>
    <hr align="left" width="100%" color="Black" size="3">
    <form method="POST" onSubmit="return(confirm('Etes-vous sûr de vouloir valider cette fiche ?'));" action="index.php?uc=validerFrais&action=selectionnerVisiteur&action2=FicheValide">
        <input TYPE='hidden' NAME='Id' VALUE='<?php echo $_POST['Id']; ?>'>
        <input TYPE='hidden' NAME='mois' VALUE='<?php echo $_POST['mois']; ?>'>
	<input type='Submit' value='Valider cette fiche' style='left: 37%; position: relative'>
    </form>
    
    <div class="corpsForm">
        <form method="POST" action="index.php?uc=validerFrais&action=VisiteurSelected&action2=FraitForfait" onsubmit="return confirm('Voulez-vous vraiment modifier les frais forfaits ?');">
            <input TYPE='hidden' NAME='Id' VALUE='<?php echo $_POST['Id']; ?>'>
            <input TYPE='hidden' NAME='mois' VALUE='<?php echo $_POST['mois']; ?>'>
            <fieldset>
                <legend><h4>Eléments forfaitisés :</h4></legend>
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
                        echo"Frais forfaits modifiés avec succès !";
                    }
                ?>
            </fieldset>
            <input type="Submit" value="Valider" style="left: 87%; position: relative">
        </form>
    </div>
    <br>
    <br>
    
    <h4>Descriptif des éléments hors-forfait</h4>
    <table width="100%" Cellpadding="10">
	<th>Date</th><th>Libellé</th><th>Montant</th><th></th>
        <?php 
        foreach($FraitHorsForfait as $TabHorsForfait)
        {
	?>
            <form method="POST" action ="index.php?uc=validerFrais&action=VisiteurSelected&action2=FraitHorsForfait" onsubmit="return confirm('Voulez-vous vraiment supprimer ce frais hors forfait ?');">
                <input TYPE='hidden' NAME='Id' VALUE='<?php echo $_POST['Id']; ?>'>
                <input TYPE='hidden' NAME='mois' VALUE='<?php echo $_POST['mois']; ?>'>
                <tr
                    <td>
                        <?php echo $TabHorsForfait['date']; ?></td><td><?php echo $TabHorsForfait['libelle']; ?>
                    </td>
                    <td>
                        <?php echo $TabHorsForfait['montant']; ?>
                    </td>
                    <td align=center><input  type="Submit" value="Supprimer"/></td>
                </tr>
                        <input TYPE='hidden' NAME='IdHorsForfait' VALUE='<?php echo $TabHorsForfait['id']; ?>'>
                        <input TYPE='hidden' NAME='LibHorsForfait' VALUE='<?php echo $TabHorsForfait['libelle']; ?>'>
            </form>
        <?php
        }
        ?>
    </table>
        <?php
        if(isset($MajFraitHorsForfait))
        {
        ?>  Le frais hors forfait <?php echo $_POST['LibHorsForfait']; ?>à été supprimé
        <?php
        }
    }
    else
    {
        echo"Pas de fiche de frais pour ce visiteur et ce mois.";
    }
    ?>