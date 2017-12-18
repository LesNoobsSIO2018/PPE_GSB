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
           
                
                
            <?php echo form_open('Ctrl_Visiteur/modifierRegionMod');  ?>
            
                
            <h4><b>Veuillez saisir les informations de la région</b></h4>
            <br><label>Code de la region:</label><input type="text" name="REG_CODE" value="<?php echo $uneRegion[0]->REG_CODE; ?>" />
            
            <br><label>Libellé région:</label><input type="text" name="REG_NOM" value="<?php echo $uneRegion[0]->REG_NOM; ?>" />
            
            <br><label>Code secteur</label>
            <select name="SEC_CODE" id="lstSec" value="<?php echo $uneRegion[0]->SEC_CODE; ?>">
                <?php foreach ($lesSecteurs as $sec){ 
                    echo "<option value='".$sec->SEC_CODE."'>".$sec->SEC_LIBELLE."</option>";
                }
                    ?>
                
                
            </select>
            <input type="hidden" name ="hidden_id" value="<?php echo $uneRegion[0]->REG_CODE; ?>">
    
            <br><input type="submit" class="btn btn-info" name="subValider" value="Modifier la région">      
<?php echo form_close();  ?>
                    
            
    </body>
</html>       
