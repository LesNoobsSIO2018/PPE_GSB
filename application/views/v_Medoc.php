<html>
    <head>
        <title>Médicaments</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        
        <script type="text/javascript"></script>

    </head>
    <body>
        <h2>Création et modification d'un médicaments</h2>
         <input type="text">
        <input type="button" value="créer" id="btnMedoc">
        <br>
        <br>
        <br>
        <a href="index.php/Ctrl_Medoc/lol/"></a>
        <h2>Liste des prescriptions existantes</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Composition</th>
                <th>Prix échantillon</th>
            </tr>
            <?php
                foreach($lesMedicaments as $med){
                
            ?>
            <tr>
                <td><?php echo $med->MED_NOMCOMMERCIAL;?></td>
                <td><?php echo $med->MED_COMPOSITION;?></td>
                <td><?php echo $med->MED_PRIXECHANTILLON;?></td>
                <td><input type="button" value="Modifier" id=btnModMedoc"></td>
            </tr> 
            <?php } ?>
        </table>
    </body>
</html>
    


