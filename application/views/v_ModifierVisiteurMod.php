
<html>
    <head>
        <title> Gestions des visiteurs </title>
        <h1> Gestion des visiteurs  <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
        <body>
            
                
                
            <?php echo form_open('Ctrl_Visiteur/modifierVisiteurMod');  ?>
            
            
            <h4><b>Veuillez saisir les coordonnées du visiteurs</b></h4>
            <br><label>Matricule: </label><input type="text" name="VIS_MATRICULE" value="<?php echo $unMatricule[0]->VIS_MATRICULE; ?>" />
            <br><label>Nom: </label><input type="text" name="VIS_NOM" value="<?php echo $unMatricule[0]->VIS_NOM; ?>" />
            <br><label>Prénom: </label><input type="text" name="Vis_PRENOM" value="<?php echo $unMatricule[0]->Vis_PRENOM; ?>" />
            <br><label>Adresse: </label><input type="text" name="VIS_ADRESSE" value="<?php echo $unMatricule[0]->VIS_ADRESSE; ?>" />
            <br><label>CP: </label><input type="text" name="VIS_CP" value="<?php echo $unMatricule[0]->VIS_CP; ?>" />
            <br><label>Ville: </label><input type="text" name="VIS_VILLE" value="<?php echo $unMatricule[0]->VIS_VILLE; ?>" />
            <br><label>Date d'embauche: </label><input type="date" name="VIS_DATEEMBAUCHE" value="<?php echo $unMatricule[0]->VIS_DATEEMBAUCHE; ?>" >
            <br><label>Code secteur: </label>
            <select name="SEC_CODE" id="lstSec" value="<?php echo $unMatricule[0]->SEC_CODE; ?>">
                <?php foreach ($lesSecteurs as $sec){ 
                    echo "<option value='".$sec->SEC_CODE."'>".$sec->SEC_LIBELLE."</option>";
                }
                    ?>
                
            </select>
            <br><label>Libellé laboratoire: </label>
            <select name="LAB_CODE" id="lstLab" value="<?php echo $unMatricule[0]->LAB_CODE; ?>" >
                <?php foreach ($lesLabos as $l){ 
                    echo "<option value='".$l->LAB_CODE."'>".$l->LAB_NOM."</option>";
                }
                    ?>
                <input type="hidden" name ="hidden_id" value="<?php echo $unMatricule[0]->VIS_MATRICULE; ?>">
            <br><br><input type="submit" class="btn btn-info" name="subValider" value="Modifier le visiteur">      
                

<?php echo form_close();  ?>
                    </thead>
            
    </body>
</html>
