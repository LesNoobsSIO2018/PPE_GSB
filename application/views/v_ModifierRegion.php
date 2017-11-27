
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
           
                
            <h4><b>Veuillez choisir une région pour pouvoir la modifier</b></h4>    
            <?php echo form_open('Ctrl_Visiteur/modRegion/');  ?>
            
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

                   <td><br><input type="button" class="btn btn-info" name="subValider" value="Choisir" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Visiteur/modRegion/<?php echo $reg->REG_CODE; ?>'"/>              
               </tr>
          <?php   
            }
           ?>  
           
            
       </table>
<?php echo form_close();  ?>
                    
            
    </body>
</html>
