
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
            
            
            <h4><b>Veuillez saisir les coordonnées du visiteurs:</b></h4>
            <br><label>Matricule:</label></br><input type="text" name="VIS_MATRICULE" />
            <br><label>Nom:</label></br><input type="text" name="VIS_NOM" />
            <br><label>Prénom:</label></br><input type="text" name="Vis_PRENOM" />
            <br><label>Adresse:</label></br><input type="text" name="VIS_ADRESSE" />
            <br><label>CP:</label></br><input type="text" name="VIS_CP" />
            <br><label>Ville</label></br><input type="text" name="VIS_VILLE" />
            <br><label>Date d'embauche</label></br><input type="date"  name="VIS_DATEEMBAUCHE">
            <br>
            <br><label>Code secteur</label></br><input type="text"  name="SEC_CODE">
            <br><label>Code laboratoire</label></br><input type="text"  name="LAB_CODE">
            <input type="submit" class="btn btn-info" name="subValider" value="Ajouter le visiteur" >
                </td>
                
           
            
            <!--<br><input class="btn btn-primary" type="button" value="Ajouter le visiteur" href="url de la page"/></br>-->
       
                
           <table class="table">
               <tr>
                   <th>Matricule</th>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Adresse</th>
                   <th>CP</th>
                   <th>Ville</th>
                   <th>Date d'embauche</th>
                   <th>Secteur code</th>
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
                   
                   <td><input type="button" class="btn btn-info" value="Choisir">
               </tr>
          <?php   
            }
           ?>  
          
            
       </table>
<?php echo form_close();  ?>
                    </thead>
            
    </body>
</html>