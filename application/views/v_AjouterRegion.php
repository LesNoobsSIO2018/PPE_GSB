
<html>
    <head>
        <title> Gestion des régions </title>
        <h1> Gestion des Régions  <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
        <body>
           
                
                
            <?php echo form_open('Ctrl_Visiteur/ajouterRegion/');  ?>
            
                
            <h4><b>Veuillez saisir les informations de la région</b></h4>
            <br><label>Code de la region:</label></br><input type="text" name="VIS_MATRICULE" value="" />
            <br><label>Secteur:</label></br><input type="text" name="VIS_NOM" value="" />
            <br><label>Libellé région:</label></br><input type="text" name="Vis_PRENOM" value="" />
 
            <input type="submit" class="btn btn-info" name="subValider" value="Ajouter la région" >
                
                
           
            
            <!--<br><input class="btn btn-primary" type="button" value="Ajouter le visiteur" href="url de la page"/></br>-->
       
                
           <table class="table">
               <tr>
                   <th>Code de la région</th>
                   <th>Secteur</th>
                   <th>Libellé région</th>
                
               </tr>
                <?php     
                    foreach($lesRegions as $reg){
                ?>
               <tr>
                   <td><?php echo $reg->REG_CODE;?></td>
                   <td><?php echo $reg->SEC_CODE;?></td>
                   <td><?php echo $reg->REG_NOM;?></td>

                   <td><input type="button" class="btn btn-info" value="Choisir cette région">
               </tr>
          <?php   
            }
           ?>  
           
            
       </table>
<?php echo form_close();  ?>
                    
            
    </body>
</html>