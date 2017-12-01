
<html>
    <head>
        <title> Gestions des visiteurs </title>
        <h1> Modifier des visiteurs  <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
        <body>
                   
       
            <h4><b>Veuillez choisir un visiteur pour pouvoir le modifier</b></h4>
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
                   <td><?php echo $vis->SEC_NOM;?></td>
                   
                   <td><input type="button" class="btn btn-info" name="subValider" value="Choisir" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Visiteur/modVisiteur/<?php echo $vis->VIS_MATRICULE; ?>'"/>           
               </tr>
          <?php   
            }
           ?>  
          
       </table>

    </body>
</html>
