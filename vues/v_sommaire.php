    <!-- Division pour le sommaire -->
    <nav>
     <div id="infosUtil">
    
        <h2>
    
</h2>
        </div>  
        <ul id="menuList">
            <?php if($_SESSION['type']=='v')
            {          
?>
			<li >
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
            <?php } 
            else if ($_SESSION['type']=='c'){?>
           
			<li >
				  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
                         <li class="smenu">
              <a href="index.php?uc=validerFrais&action=..." title="Se déconnecter">Valider fiche de frais</a>
           </li>
           <?php } ?>
         </ul>
        
    </nav>
    