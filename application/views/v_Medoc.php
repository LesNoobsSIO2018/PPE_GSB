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
                <input type="text" name="MED_DEPOTLEGAL" placeholder="Dépot légal">
                <input type="text" name="MED_NOMCOMMERCIAL" placeholder="nom médicament">
                <input type="text" name="FAM_CODE" placeholder="Code famille">
                <input type="text" name="MED_COMPOSITION" placeholder="Composition">
                <input type="text" name="MED_EFFETS" placeholder="Effets">
                <input type="text" name="MED_CONTREINDIC" placeholder="Contre indication">
                <input type="text" name="MED_PRIXECHANTILLON" placeholder="Prix échantillon">
                <input type="submit" value="créer" name="btnMedoc">
                    <br>
                    <br>
                <input type="button" value="prescription" onClick="location.href='../../index.php/Ctrl_Medoc/getPrescription'">
                <input type="button" value="Individu" onClick="location.href='../../index.php/Ctrl_Medoc/getAllIndividu'">
                <input type="button" value="Accueil" onClick="location.href='../../../PPE'">
                    <br>
                    <br>
                    <br>
            <h2>Liste des médicaments existants</h2>
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
                    <br>
        </body>
</html>
    


