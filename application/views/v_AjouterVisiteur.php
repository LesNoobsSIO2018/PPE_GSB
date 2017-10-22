
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
            
                
                
            <?php echo form_open('Ctrl_Visiteur/form_visiteur');  ?>
            
            
            <h4><b>Veuillez saisir les coordonnées du visiteurs</b></h4>
            <br><label>Matricule: </label><input type="text" name="VIS_MATRICULE" />
            <br><label>Nom: </label><input type="text" name="VIS_NOM" />
            <br><label>Prénom: </label><input type="text" name="Vis_PRENOM" />
            <br><label>Adresse: </label><input type="text" name="VIS_ADRESSE" />
            <br><label>CP: </label><input type="text" name="VIS_CP" />
            <br><label>Ville: </label><input type="text" name="VIS_VILLE" />
            <br><label>Date d'embauche: </label><input type="date" name="VIS_DATEEMBAUCHE">
            <br><label>Code secteur: </label>
            <select name="SEC_CODE" id="lstSec">
                <?php foreach ($lesSecteurs as $sec){ 
                    echo "<option value='".$sec->SEC_CODE."'>".$sec->SEC_LIBELLE."</option>";
                }
                    ?>
                
            </select>
            <br><label>Libellé laboratoire: </label>
            <select name="LAB_CODE" id="lstLab">
                <?php foreach ($lesLabos as $l){ 
                    echo "<option value='".$l->LAB_CODE."'>".$l->LAB_NOM."</option>";
                }
                    ?>
            <br><input type="submit" class="btn btn-info" name="subValider" value="Ajouter le visiteur" >
                </td>
              
           <table class="table">
               <tr>
                   <th>Matricule</th>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Adresse</th>
                   <th>CP</th>
                   <th>Ville</th>
                   <th>Date d'embauche</th>
                   <th>Code secteur</th>
                   <th>Code du laboratoire</th>
               </tr>
                <?php     
                    foreach($lesVisiteurs as $vis){
                ?>
               <tr>
                   <td><?php echo $vis->VIS_MATRICULE;?></td>
                   <td><?php echo $vis->VIS_NOM;?></td>
                   <td><?php echo $vis->Vis_PRENOM;?></td>
                   <td><?php echo $vis->VIS_ADRESSE;?></td>
                   <td><?php echo $vis->VIS_CP;?></td>
                   <td><?php echo $vis->VIS_VILLE;?></td>
                   <td><?php echo $vis->VIS_DATEEMBAUCHE;?></td>
                   <td><?php echo $vis->SEC_CODE;?></td>
                   <td><?php echo $vis->LAB_CODE;?></td>
                   
                   
               </tr>
          <?php   
            }
           ?>  
          
            
       </table>
<?php echo form_close();  ?>
                    </thead>
            
    </body>
</html>