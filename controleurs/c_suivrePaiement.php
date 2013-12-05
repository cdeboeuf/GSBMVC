<?php
include("vues/v_sommaire.php");
$action=$_GET['action'];
switch($action)
{
	case 'suivre':
	{
        $listeVisiteur=$pdo->visiteurFicheValideRembourse();
		include("vues/v_suivrePaiement.php");
		break;
	}
	case 'VisiteurSelected':
	{		
           $Details=$pdo-> detailFicheValideRembourse($_POST['Id']);
           $Details2=$pdo-> detailFicheValideRembourse($_POST['Id']);

           include("vues/v_suivrePaiementChoi.php");
		break;
	}
        	case 'moisSelected':
	{
           $info=$pdo-> getLesFraisForfait($_POST['Id'], $_POST['mois']);
           $info2=$pdo-> getLesFraisHorsForfait($_POST['Id'],$_POST['mois']);

           include("vues/v_suivrePaiementDetail.php");
		break;
	}
}
?>