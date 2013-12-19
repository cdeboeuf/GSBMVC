<div id="contenu">
    <div class="corpsForm">
        <TABLE BORDER="1"> 
            <CAPTION> Forfait: </CAPTION> 
            <TR> 
                <TH> libellé </TH> 
                <TH> Quantité </TH> 
            </TR>  
             <?php 
             foreach ( $info as $detail  )
                {?>
            <TR>
                <TD><?php echo $detail['libelle'] ?></TD> 
                <TD><?php echo $detail['quantite']?></TD> 
            </TR> <?php }?>
         </TABLE> 

         <TABLE BORDER="1"> 
         <CAPTION> Hors forfait </CAPTION> 
         <TR>  
            <TH> Date </TH> 
            <TH> Libellé </TH> 
            <TH> Montant </TH> 
         </TR>   
         <?php  foreach ( $info2  as$detail )
                {?>
                    <TR>  
                        <TD><?php echo $detail['date'] ?></TD> 
                        <TD><?php echo $detail['libelle'] ?></TD> 
                        <TD><?php echo $detail['montant']?></TD> 
                   </TR> 
           <?php }?>  
          </TABLE>
    <form method="POST" action="index.php?uc=suivrePaiement&action=suivre">
          <input type="Submit" value="Retour">
    </form>
    </div>
</div>