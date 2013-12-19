<?php
//Si il n'y a pas d'action, metre l'action demande de connection.
if(!isset($_REQUEST['action']))
{
    $_REQUEST['action'] = 'demandeConnexion';
}

//Action mise dns une variable
$action = $_REQUEST['action'];

//Recherche du case de l'action
switch($action){
	case 'demandeConnexion':
        {
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':
        {
        //Recuperation des variables login et mot de passe
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
                
                //Apel de la fonction
		$utilisateur = $pdo->getInfosConnection($login,$mdp);
                
                
		if(!is_array($utilisateur))
                {
                        //Si il n'y a pas d'utilisateur possédant le même login et mot de passe
			ajouterErreur("Login ou mot de passe incorrect");
                        //Afiche les vues
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
                        //Si il y a un utilisateur possédant le même login et mot de passe enregistrement des informations
			$id = $utilisateur['id'];
			$nom =  $utilisateur['nom'];
			$prenom = $utilisateur['prenom'];
                        $type=$utilisateur['type'];
                        
                        //fonction connection
			connecter($id,$nom,$prenom,$type);
                        
                        //Affiche la vue
			include("vues/v_sommaire.php");
		}
		break;
	}
        case'deconnexion':
        {
            //destruction de la session
            session_unset ();  
            session_destroy ();
        }
	default :
        {
                //Autre case
		include("vues/v_connexion.php");
		break;
	}
}
?>