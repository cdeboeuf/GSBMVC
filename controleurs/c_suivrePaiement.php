<?php
include("vues/v_sommaire.php");
//Recuperation de l'action
$action=$_GET['action'];
switch($action)
{
	case 'suivre':
	{
                //Fonction affiche le visiteur avec des fiche de frais a remourser
                $listeVisiteur=$pdo->visiteurFicheValideRembourse();
                //Affichage
		include("vues/v_suivrePaiement.php");
		break;
	}
	case 'VisiteurSelected':
	{	
                //Fonction affiche le detail des fiches
                $Details=$pdo-> detailFicheValideRembourse($_POST['Id']);
                $Details2=$pdo-> detailFicheValideRembourse($_POST['Id']);
                //Affichage
                include("vues/v_suivrePaiementChoi.php");
		break;
	}
        	case 'moisSelected':
	{
                //Fonction affiche le frais forfait et hors forfait d'un mois séléctionné
                $info=$pdo-> getLesFraisForfait($_POST['Id'], $_POST['mois']);
                $info2=$pdo-> getLesFraisHorsForfait($_POST['Id'],$_POST['mois']);
                include("vues/v_suivrePaiementDetail.php");
		break;
	}
}
?>